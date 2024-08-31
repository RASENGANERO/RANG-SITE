<?php

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

}
?>