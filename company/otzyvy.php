<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("keywords", "Отзывы");
$APPLICATION->SetPageProperty("description", "Отзывы");
$APPLICATION->SetTitle("Отзывы");
?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>