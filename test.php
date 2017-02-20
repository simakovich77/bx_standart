<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

<<<<<<< HEAD
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

<?
$email = COption::GetOptionString("main","email_from");
echo "admin email - ".$email."</br>";

COption::SetOptionString("main","TEST_PARAMETER", "Y");
$parameter = COption::GetOptionString("main","TEST_PARAMETER");
echo "TEST_PARAMETER -".$parameter;
?>
	<br>
>>>>>>> 3d804b164028edc869d9110a376682302a9d1d55
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>