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


    public static function GetServices() {
        $iblockId = 21;
        $arr = [];
        $data = CIBlockElement::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => $iblockId], false, false);
        while ($res = $data->Fetch()) {
            $elementId = $res['ID'];
            $elementName = $res['NAME'];
            $elementCode = $res['CODE'];
            $elementText = $res['PREVIEW_TEXT'];
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
            $previewImage = CFile::GetFileArray($previewImageId);
            $arr[] = [
                'ID' => $elementId,
                'NAME' => $elementName,
                'CODE' => '/services/' . $elementCode,
                'PREVIEW_TEXT' => $elementText,
                'PROPERTIES' => $props,
                'PREVIEW_IMAGE' => $previewImage ? $previewImage['SRC'] : null, // URL картинки анонса
            ];
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

    



    public static function generateBreadCrumbsService($contentHtml, $nameState, $prevtextState) {
        $dom = new DOMDocument();
        $dom->loadHTML(strval($contentHtml));

    }
    public static function generateTextes($contentHtml, $nameText, $prevText) {
        $dom = new DOMDocument();
    
        // Загружаем HTML и подавляем предупреждения
        @$dom->loadHTML($contentHtml);
    
        // Проверяем существование элемента с ID 'nametext'
        $nameTextElement = $dom->getElementById('nametext');
        if ($nameTextElement) {
            $nameTextElement->nodeValue = $nameText;
        }
    
        // Проверяем существование элемента с ID 'prevtext'
        $prevTextElement = $dom->getElementById('prevtext');
        if ($prevTextElement) {
            $prevTextElement->nodeValue = $prevText;
        }
    
        // Сохраняем и возвращаем измененный HTML
        return $dom->saveHTML();
    }
}
?>