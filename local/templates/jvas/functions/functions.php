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
}
?>