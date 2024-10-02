<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
$_SERVER['DOCUMENT_ROOT']="D:/OPENSERVER/domains/ANGELINA";
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
    class ImportSections{
        public static function readExcel()
        {
			$filePath = $_SERVER['DOCUMENT_ROOT'].'/local/excel/sections.xlsx';
            if (!file_exists($filePath)) {
                return [];
            }
            $spreadsheet = IOFactory::load($filePath);
            $data = $spreadsheet->getActiveSheet()->toArray();
            array_shift($data); // Удаляем заголовки
            return $data;
        }

        public static function getIdBlock(){
            $arFilter = [
                'ACTIVE'=>'Y',
                'NAME'=>'Каталог',
            ];
            $arData = CIBlock::GetList([], $arFilter);
            if ($arBlock = $arData->Fetch()) {
                return $arBlock['ID'];
            }
            else{
                return 0;
            }
        }
		 public static function addSections($iblockId, $sections, $parentId = 0) {
            foreach ($sections as $section) {
                // Создаем раздел
				$literParam = array("replace_space"=>"-", "replace_other"=>"-", "change_case"=>"L");
				$liter = Cutil::translit($section['NAME'],"ru",$literParam);

                $sect = new CIBlockSection;
                $arFields = [
                    'IBLOCK_ID' => $iblockId,
                    'NAME' => $section['NAME'],
                    'SECTION_ID' => $parentId,
                    'ACTIVE' => 'Y',
					'CODE' => $liter,                
				];

                if ($parentId !== 0) {
                    $arFields['IBLOCK_SECTION_ID'] = $parentId;
                }
                
                    $sectionId = $sect->Add($arFields);
                    if ($sectionId) {
                        echo "Раздел '{$section['NAME']}' создан с ID: $sectionId ".'<br>';
                        // Рекурсивно создаем подразделы
                        if (!empty($section['SUBSECTIONS'])) {
                            ImportSections::addSections($iblockId, $section['SUBSECTIONS'], $sectionId);
                        }
                    } else {
                        echo "Ошибка при создании Раздела '{$section['NAME']}': " . $sect->LAST_ERROR . "\n";
                        $arFilter = [
                            'IBLOCK_ID' => $iblockId, // Указываем ID инфоблока
                            'NAME' => $section['NAME'],
                            'ACTIVE' => 'Y', // Можно добавить дополнительный фильтр, если нужно
                        ];
                        $sectionRes = CIBlockSection::GetList([], $arFilter)->Fetch();
                        $sectionId = $sectionRes['ID'];
                        if (!empty($section['SUBSECTIONS'])) {
                            ImportSections::addSections($iblockId, $section['SUBSECTIONS'], $sectionId);
                        }
                    }
                }
            }
        public static function generateArray($data){
            $sections = [];
            foreach ($data as $row) {
                // Проверяем наличие значения в первом столбце для секции
                if (!empty($row[0])) {
                    $sections[] = [
                        'NAME' => $row[0],
                        'SUBSECTIONS' => [],
                    ];
                }

                // Проверяем наличие значения во втором столбце для подкатегорий
                if (!empty($row[1])) {
                    $lastIndex = count($sections) - 1; // Индекс последней секции
                    if ($lastIndex >= 0) {
                        $sections[$lastIndex]['SUBSECTIONS'][] = [
                            'NAME' => $row[1],
                            'SUBSECTIONS' => [],
                        ];
                    }
                }

                // Проверяем наличие значения в третьем столбце для подкатегорий третьего уровня
                if (!empty($row[2])) {
                    $lastSectionIndex = count($sections) - 1;
                    if ($lastSectionIndex >= 0 && !empty($sections[$lastSectionIndex]['SUBSECTIONS'])) {
                        $lastSubsectionIndex = count($sections[$lastSectionIndex]['SUBSECTIONS']) - 1;
                        if ($lastSubsectionIndex >= 0) {
                            $sections[$lastSectionIndex]['SUBSECTIONS'][$lastSubsectionIndex]['SUBSECTIONS'][] = [
                                'NAME' => $row[2],
                            ];
                        }
                    }
                }
            }
            return $sections;
        }
    }
	$dataExcel = ImportSections::readExcel();
//print_r($dataExcel);
   if ($dataExcel) {
      $sectionsData = ImportSections::generateArray($dataExcel);
      $iblockId = ImportSections::getIdBlock();
      ImportSections::addSections($iblockId, $sectionsData, $parentId = 0);
  }
  else {
      echo "Файл не существует!";
  }
?>