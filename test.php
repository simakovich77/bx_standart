<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?><?

if(CModule::IncludeModule("iblock")){
$arSelect = Array("ID", "NAME", "PROPERTY_PRICE");
$arFilter = Array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_PRICE" => false);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    // print_r($arFields);
    dump($arFields);
}


}


?><br>
=======
?>

	<br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>