<?php
use PhpOffice\PhpSpreadsheet\IOFactory;
$_SERVER['DOCUMENT_ROOT']="/var/www/backend";
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
    class ImportProperties{
        public static function readExcel()
        {
			$filePath = $_SERVER['DOCUMENT_ROOT'].'/local/excel/properties.xlsx';
            if (!file_exists($filePath)) {
                return [];
            }
            $spreadsheet = IOFactory::load($filePath);
            $data = $spreadsheet->getActiveSheet()->toArray();
            array_shift($data); // Удаляем заголовки
            //Функция генерации данных в нужном виде
            $data = self::generateValues($data, $spreadsheet);
            return $data;
        }
        public static function setBitrixRules($propertyCode):string  {
            if (strlen($propertyCode) >= 50) { // Ограничение битрикс: не больше 50 символов, поэтому поставил с запасом
                $propertyCode = substr($propertyCode, 0, 45);
            }
            $propertyCode = preg_replace('/[^a-zA-Z0-9_]/', '', $propertyCode);
            if (preg_match('/^\d/', $propertyCode)) {// Если начинается с цифры, добавляем префикс (например, "code_") 
                $propertyCode = 'CODE_' . $propertyCode;
            }
            return strtoupper($propertyCode);
        }
        public static function uniqueProperties(&$array) {
            $propertyCount = [];

            // Проходим по массиву
            foreach ($array as &$item) {
                // Получаем символьный код свойства (четвёртый элемент)
                $property = $item[3];

        // Если свойство уже встречалось, увеличиваем счетчик
                if (isset($propertyCount[$property])) {
                    $propertyCount[$property]++;
                    // Приписываем суффикс к свойству
                    $item[3] = $property . '_' . $propertyCount[$property];
                } else {
                    // Если это первое вхождение, инициализируем счетчик
                    $propertyCount[$property] = 1;
                }
            }
            return $array;
        }
        public static function generateValues(array $dataValues, object $sprObject) {

            for ($i = 0; $i < 2; $i++) { //Удаляем первые два элемента, так как они являются заголовками
                array_shift($dataValues);
            }
            $row = 4;
            foreach ($dataValues as &$item){
                if(!empty($item)) {
                    $cell = $sprObject->getActiveSheet()->getCell('E'.$row); //Получаем значение формулы
                    $vrs = explode('"', $cell->getValueString()); //Получаем значение формулы (приводим к нужному виду)
                    if (count($vrs)>1) {
                        $item[4] = trim(strval($vrs[19]));    
                    }
                }
                // Проверка: генерируем только те элементы, у которых есть название. Иначе - будут просто пустые элементы
                if (strlen($item[1]) === 0) {
                    $item = [];
                }
                else {
                    $item[4] = self::setBitrixRules($item[4]);// Ограничение битрикс: только цифры, латинские буквы, и символы подчёркивания
                    $item = [
                        $item[1],
                        $item[2],
                        $item[3],
                        $item[4],
                        $item[5],
                        $item[6],
                        $item[7],
                        $item[8],
                        $item[9],
                        $item[10],
                        $item[11],
                        $item[12],
                        $item[23],
                    ];
                }
                $item = array_values($item);
                $row += 1;
            }
            $dataValues = array_filter($dataValues);
            $dataValues = array_values($dataValues);

            $dataValues = self::uniqueProperties($dataValues);
            return $dataValues;
        }
        public static function getIdBlock(){
            $arFilter = [
                'ACTIVE'=>'Y',
                'NAME'=>'Каталог',
            ];
            $arData = CIBlock::GetList(['SORT'=>'ASC'], $arFilter);
            if ($arBlock = $arData->Fetch()) {
                return $arBlock['ID'];
            }
            else{
                return 0;
            }
        }
        //Устанавливаем значение, так как там тоже формула
        public static function setCodeList(string $listCode):string {
            $listCode = explode('"',$listCode);
            if (count($listCode) === 1) {
                return $listCode[0];
            }
            return $listCode[11];
        }
        public static function getListProperty(string $name) {
            $arrayListValues = [];
			$filePath = $_SERVER['DOCUMENT_ROOT'].'/local/excel/properties.xlsx';
            $spreadsheet = IOFactory::load($filePath);
            $foundSheet = null;

            // Проходим по всем листам и ищем совпадение
            foreach ($spreadsheet->getAllSheets() as $worksheet) {
                if (stripos($worksheet->getTitle(), $name) !== false) {
                    $foundSheet = $worksheet;
                    break;
                }
            }
            // Проверяем, существует ли лист с указанным именем
            if ($foundSheet) {
                $highestRow = $foundSheet->getHighestRow();
                $highestColumn = $foundSheet->getHighestColumn();

                // Получаем данные из листа
                for ($row = 3; $row <= $highestRow; $row++) {
                    $rowData = [];
                    for ($col = 'A'; $col <= $highestColumn; $col++) {
                        $rowData[] = $foundSheet->getCell($col . $row)->getValue();
                    }
                    $rowData[4] = self::setCodeList($rowData[4]);
    
                    $propSort = [
                        "VALUE" => $rowData[0],
                        "DEF" => $rowData[1],
                        "SORT" => $rowData[2],
                        "XML_ID" => $rowData[3],
                        "PROPERTY_CODE" => $rowData[4],
                    ];
                    
                    $arrayListValues[] = $propSort; 
                }
                $arrayListValues = self::uniqueXMLID($arrayListValues);
            } else {
                echo "Лист с именем '{$name}' не найден. \n";
            }
            return $arrayListValues;
        }
        public static function uniqueXMLID(&$array) {
            $xmlIdCount = [];
        
            // Проходим по массиву
            foreach ($array as &$item) {
                // Получаем XML_ID (четвёртый элемент)
                $xmlId = $item['XML_ID'];
        
                // Если XML_ID уже встречался, увеличиваем счетчик
                if (isset($xmlIdCount[$xmlId])) {
                    $xmlIdCount[$xmlId]++;
                    // Приписываем суффикс к XML_ID
                    $item['XML_ID'] = $xmlId . '_' . $xmlIdCount[$xmlId];
                } else {
                    // Если это первое вхождение, инициализируем счетчик
                    $xmlIdCount[$xmlId] = 1;
                }
            }
            return $array;
        }


        public static function generatePropertiesBlock(array $dataGenerate, int $blockid) {
            $dataProperties = [];
            foreach ($dataGenerate as $dataGen) {
                $arrayProp = [
                    "NAME" => $dataGen[0],
                    "ACTIVE" => $dataGen[1],
                    "SORT" => $dataGen[2],
                    "CODE" => $dataGen[3],
                    "PROPERTY_TYPE" => substr($dataGen[4],0,1),
                    "MULTIPLE" => $dataGen[5],
                    "IS_REQUIRED" => $dataGen[6],
                    "SEARCHABLE" => !empty($dataGen[7]) ? $dataGen[7] : 'N',
                    "FILTRABLE" => !empty($dataGen[8]) ? $dataGen[8] : 'N',
                    "DEFAULT_VALUE" => !empty($dataGen[9]) ? $dataGen[9] : '',
                    "ROW_COUNT" => !empty($dataGen[10]) ? $dataGen[10] : 1,
                    "COL_COUNT" => !empty($dataGen[11]) ? $dataGen[11] : 1,
                    "IBLOCK_ID" => $blockid,
                ];
                if ($dataGen[4] === 'L') {
                    $arrayProp['VALUES'] = self::getListProperty(trim($dataGen[0]));
                }
                $dataProperties[] = $arrayProp;
            }
            return $dataProperties;
        }
        public static function addPropertiesInfoBlock($valuesProps) {
            $blockId = self::getIdBlock();
            $propItems = self::generatePropertiesBlock($valuesProps, $blockId);
        
            // Получаем существующие свойства инфоблока
            $existingProperties = [];
            $dbProperties = CIBlockProperty::GetList([], ['IBLOCK_ID' => $blockId]);
            while ($arProperty = $dbProperties->Fetch()) {
                $existingProperties[$arProperty['CODE']] = $arProperty['ID'];
            }
        
            // Добавляем новые свойства, если их еще нет
            $blockProperty = new CIBlockProperty;
            foreach ($propItems as $propertyItem) {
                if (!isset($existingProperties[$propertyItem['CODE']])) { // Проверка на существование
                    $result = $blockProperty->Add($propertyItem);
                    if ($result) {
                        echo "Свойство '{$propertyItem['NAME']}' успешно добавлено! \n";
                    } else {
                        echo "Ошибка добавления свойства '{$propertyItem['NAME']}': {$blockProperty->LAST_ERROR} \n";
                        echo "<pre>";
                        print_r($propertyItem);
                        echo "</pre>";
                        
                    }
                } else {
                        echo "Свойство '{$propertyItem['NAME']}' уже существует. Пропускаем. \n";
                    }
                    
                    $valuesProps[3] = $propertyItem['CODE'];
                }
            return $valuesProps;
        }
        
        
        public static function addPropToSection($valuesProps) {
            $blockId = self::getIdBlock();
        
            // Получение всех разделов инфоблока
            $sections = [];
            $dbSections = CIBlockSection::GetList([], ['IBLOCK_ID' => $blockId]);
            while ($arSection = $dbSections->Fetch()) {
                $sections[$arSection['NAME']] = $arSection['ID']; // Сохраняем имя раздела и его ID
            }
        
            // Присвоение свойств разделам
            foreach ($valuesProps as $property) {
                $propertyCode = $property[3]; // Символьный код свойства
                $sectionNames = $property[12]; // Название раздела или разделы через запятую
        
                // Разделяем названия на массив
                $sectionNamesArray = array_map('trim', explode(',', $sectionNames));
        
                // Проверка на "для всех"
                if (in_array('для всех', $sectionNamesArray)) {
                    // Применяем свойство ко всем разделам
                    foreach ($sections as $sectionName => $sectionId) {
                        self::updateSectionProperties($blockId, $sectionId, $propertyCode);
                    }
                } else {
                    // Применяем свойство только к указанным разделам
                    foreach ($sectionNamesArray as $sectionName) {
                        if (isset($sections[$sectionName])) {
                            $sectionId = $sections[$sectionName];
                            self::updateSectionProperties($blockId, $sectionId, $propertyCode);
                        } else {
                            echo "Раздел '$sectionName' не найден. \n";
                        }
                    }
                }
            }
        }
        
        public static function updateSectionProperties($blockId, $sectionId, $propertyCode) {
            $dbProps = CIBlockProperty::GetList([], ['IBLOCK_ID' => $blockId, 'CODE' => $propertyCode]);
            if ($arProperty = $dbProps->Fetch()) {
                $propId = $arProperty['ID'];
                CIBlockSectionPropertyLink::Add($sectionId, $propId);
                echo "Свойство '$propertyCode' успешно добавлено в раздел с ID '$sectionId'! \n";
            }
            else{
                echo "Не найдено свойство с кодом '$propertyCode' \n";
            }
        }
       
                
        

    }
	$dataExcel = ImportProperties::readExcel();
    if ($dataExcel) {
        $$dataExcel = ImportProperties::addPropertiesInfoBlock($dataExcel);
        ImportProperties::addPropToSection($dataExcel);      
    }
    else {
        echo "Файл не существует!";
    }
?>