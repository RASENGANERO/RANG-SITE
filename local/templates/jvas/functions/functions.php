<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

CModule::IncludeModule('iblock');
class Functions{
    public static function GetResidents() {
        $iblockId = 14;
        $arr = [];
        $data = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => $iblockId], false, false);

        while ($res = $data->Fetch()) {
            $elementId = $res['ID'];
            $elementName = $res['NAME'];
            $properties = CIBlockElement::GetProperty($iblockId, $elementId, ['sort' => 'asc'], ['ACTIVE' => 'Y']);
            $props = [];

            while ($prop = $properties->Fetch()) {
                // Проверяем, если свойство уже существует в массиве
                if (!isset($props[$prop['CODE']])) {
                    $props[$prop['CODE']] = []; // Инициализируем как массив
                }
                // Добавляем значение в массив свойств
                $props[$prop['CODE']][] = $prop['VALUE'];
            }
            // Получаем изображения
            $previewImageId = $res['PREVIEW_PICTURE']; // ID картинки анонса
            $detailImageId = $res['DETAIL_PICTURE']; // ID детальной картинки
            // Получаем информацию об изображениях
            $previewImage = CFile::GetFileArray($previewImageId);
            $detailImage = CFile::GetFileArray($detailImageId);
            $arr[] = [
                'ID' => $elementId,
                'NAME' => $elementName,
                'PROPERTIES' => $props,
                'PREVIEW_IMAGE' => $previewImage ? $previewImage['SRC'] : null, // URL картинки анонса
                'DETAIL_IMAGE' => $detailImage ? $detailImage['SRC'] : null, // URL детальной картинки
            ];
        }
        return $arr;
    }
    public static function GetTarrifsByType($value){
        // Убедитесь, что $value - это массив значений
        if (!is_array($value)) {
            $value = [$value]; // Преобразуем в массив, если это не массив
        }
        $arr = [];
        $data = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 16, 'PROPERTY_TARRIFF_CHECK_CODE_VALUE' => $value], false, false);
        while ($res = $data->Fetch()) {
            $elementName = $res['NAME'];
            $properties = CIBlockElement::GetProperty(16, $res['ID'], ['sort' => 'asc'], ['ACTIVE' => 'Y']);
            $props = [];
            while ($prop = $properties->Fetch()) {
                if (!isset($props[$prop['CODE']])) {
                    $props[$prop['CODE']] = []; // Инициализируем как массив
                }
                $props[$prop['CODE']][] = $prop['VALUE'];
            }
            $previewImageId = $res['PREVIEW_PICTURE']; // ID картинки анонса
            $previewImage = CFile::GetFileArray($previewImageId);
            $arr[] = [
                'NAME' => $elementName,
                'PROPERTIES' => $props,
                'PREVIEW_IMAGE' => $previewImage ? $previewImage['SRC'] : null, // URL картинки анонса
            ];
        }
        return $arr;
    }
    
    public static function getBrands()
    {
        $arr = [];
        $data = CIBlockElement::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 20], false, false);
        while ($res = $data->Fetch()) {
            $elementName = $res['NAME'];
            $property = CIBlockElement::GetProperty(20, $res['ID'], ['sort' => 'asc'], ['ACTIVE' => 'Y', 'CODE' => 'URLPARTNER_CODE']);
            $property = $property->Fetch();
            $previewImageId = $res['PREVIEW_PICTURE']; // ID картинки анонса
            $previewImage = CFile::GetFileArray($previewImageId);
            $arr[] = [
                'NAME' => $elementName,
                'URL' => $property['VALUE'],
                'PREVIEW_IMAGE' => $previewImage ? $previewImage['SRC'] : null, // URL картинки анонса
            ];
        }
        return $arr;
    }
    public static function generateNumbers(int $length): array
    {
        $numbers = [];
        $k = 0;
        for ($i = 0; $i < $length; $i++)
        {   
            $k += 1;
            if ($k < 10) {
                $numbers[] = "0{$k}.";
            } else {
                $numbers[] = "{$k}.";
            }
        }
        return $numbers;
    }

    public static function getSectionId() {

    }

    public static function GetServices() {
        $iblockId = 21;
        $arr = [];
    
        // Получаем ID раздела по его названию
        $sectionResult = CIBlockSection::GetList(
            [],
            ['IBLOCK_ID' => $iblockId, 'NAME' => 'Комплексные решения'],
            false
        );
    
        if ($section = $sectionResult->Fetch()) {
            $sectionId = $section['ID'];
    
            // Получаем элементы из найденного раздела
            $data = CIBlockElement::GetList(
                ['SORT' => 'ASC'], // Сортировка по полю SORT
                ['IBLOCK_ID' => $iblockId, 'SECTION_ID' => $sectionId],
                false,
                false
            );
    
            while ($res = $data->Fetch()) {
                $elementId = $res['ID'];
               
    
                // Получаем свойства элемента
                $properties = CIBlockElement::GetProperty($iblockId, $elementId, ['sort' => 'asc'], ['ACTIVE' => 'Y']);
                $props = [];
    
                while ($prop = $properties->Fetch()) {
                    if (!isset($props[$prop['CODE']])) {
                        $props[$prop['CODE']] = []; // Инициализируем как массив
                    }
                    $props[$prop['CODE']][] = $prop['VALUE'];
                }
    
                // Получаем изображения
                $previewImageId = $res['PREVIEW_PICTURE']; // ID картинки анонса
                $previewImage = CFile::GetFileArray($previewImageId);
                $res['DETAIL_PAGE_URL'] = '/services/'.$section['CODE'].'/'.$res['CODE'].'/';
                $res['PREVIEW_IMAGE'] = $previewImage ? $previewImage['SRC'] : null;
                $arr[] = $res;
            }
        }
    
        return $arr;
    }
    
    public static function getSectionBlog($check, $sectionChains) : array {
        if (!array_key_exists('ELEMENT_CODE', $check)) {
            return $sectionChains;
        }
        else{
            $arSelect = array('ID', 'CODE', 'NAME');
            $arFilter = array('IBLOCK_ID' => 15, 'IBLOCK_ACTIVE' => 'Y', 'ACTIVE' => 'Y');
            $arSort = array('SORT' => 'ASC');
            $dbResult = CIBlockSection::GetList($arSort, $arFilter, false, $arSelect);
            $arResult = [];
            while ($arSection = $dbResult->GetNext()) {
                $arData = [];
                $arData['NAME'] = $arSection['NAME'];
                $arData['CODE'] = $arSection['CODE'];
                $arData['SECTION_PAGE_URL'] = '/blog/' . $arSection['CODE'] .'/';
                if (strpos($check['ELEMENT_CODE'], $arSection['CODE']) !== false) {
                    $arData['IS_ACTIVE_SECTION'] = 'Y';
                }
                $arResult[] = $arData;
            }
            return $arResult;
        }
    }
    public static function checkIsServiceSection($val) {
        // Получаем список секций по коду
        $result = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 21, 'CODE' => $val]);
        
        // Проверяем, есть ли результат
        if ($dt = $result->GetNext()) {
            return $dt['ID']; // Возвращаем ID секции
        } else {
            return null; // Возвращаем null, если секция не найдена
        }
    }
    
    public static function isService($url) {
        // Разбиваем URL на части и очищаем пустые значения
        $url = array_values(array_filter(explode("/", strval($url))));
        
        // Если в URL только один элемент, возвращаем статус 1
        if (count($url) === 1) {
            return ['status' => 1, 'data' => []];
        } else {
            // Проверяем, существует ли секция
            $isSection = Functions::checkIsServiceSection($url[1]);
            
            // Основные параметры фильтрации
            $arFilter = [
                'IBLOCK_ID' => 21,
                'ACTIVE' => 'Y'
            ];
            $arSort = ['SORT' => 'ASC'];
            
            // Определяем, какой фильтр использовать
            if ($isSection === null) { 
                $arFilter['CODE'] = $url[1]; // Используем CODE для элемента
                $statusCode = 2; // Статус для элемента
            } else {
                $arFilter['SECTION_ID'] = $isSection; // Используем ID секции
                $statusCode = 3; // Статус для секции
            }
    
            // Получаем элементы из инфоблока
            $resElement = CIBlockElement::GetList($arSort, $arFilter, false);
            $result = [];
            
            // Сохраняем результаты в массив
            while ($elem = $resElement->GetNext()) {
                $detailImageId = $elem['DETAIL_PICTURE']; // ID детальной картинки
                $detailImage = CFile::GetFileArray($detailImageId);
                $elem['DETAIL_PICTURE'] = $detailImage ? $detailImage['SRC'] : null;
                $result[] = $elem;
            }
    
            return ['status' => $statusCode, 'data' => $result]; // Возвращаем статус и данные
        }
    }

    public static function isSection($value)
    {
        if (!array_key_exists('ELEMENT_CODE', $value)) {
            return [];
        }
        else {  // Параметры для фильтрации
            $arFilter = array(
                'IBLOCK_ID' => 15, // Замените на ваш ID инфоблока
                'CODE' => str_replace('/','',strval($value['ELEMENT_CODE'])), // Символьный код элемента
                'ACTIVE' => 'Y' // Только активные элементы
            );
            $db_list = CIBlockElement::GetList(array(), $arFilter);
            
            $db_res = [];    // Проверяем, есть ли найденные элементы
            if ($ar_result = $db_list->GetNext()) {
                $db_res [] = $ar_result;
                return $db_res;    // Добавьте другие поля, которые вам нужны
            } 
            else {
                return [];
            }
        }
            
    }
}
?>