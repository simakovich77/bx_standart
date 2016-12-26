<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("keywords", "Отзывы");
$APPLICATION->SetPageProperty("title", "Заголовок окна брузера");
$APPLICATION->SetPageProperty("description", "Отзывы");
$APPLICATION->SetTitle("Отзывы");
?>


<p>Заголовок - <?$APPLICATION->ShowTitle()?></p>
<p>Заголовок2 - <?$APPLICATION->ShowTitle(false)?></p>
<p>test - <?$APPLICATION->ShowProperty("test")?></p>
<p>title - <?$APPLICATION->ShowProperty("title")?></p>
<p>keywords - <?$APPLICATION->ShowProperty("keywords")?></p>
<p>description - <?$APPLICATION->ShowProperty("description")?></p>
<?$APPLICATION->SetPageProperty("keywords", "Отзывы1");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>