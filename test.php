<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?>

<?
$email = COption::GetOptionString("main","email_from");
echo "admin email - ".$email."</br>";

COption::SetOptionString("main","TEST_PARAMETER", "Y");
$parameter = COption::GetOptionString("main","TEST_PARAMETER");
echo "TEST_PARAMETER -".$parameter;
?>
	<br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>