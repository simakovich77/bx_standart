<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?>

<?

if(CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME", "PROPERTY_PRICE");
    $arFilter = Array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_PRICE_VALUE" => false);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arItems[] = $arFields;
        // print_r($arFields);
        //  dump($arFields);
    }
    /*
        CEventLog::Add(array(
            "SEVERITY"=>"SECURITY",
            "AUDIT_TYPE_ID"=>"CHECK_PRICE",
            "MODULE_ID"=>"iblock",
            "ITEM_ID"=>"",
            "DESCRIPTON"=>"Проверка цен, нет цен для ".count($arItems)." элементов",
        ));
    */

    if (count($arItems) > 0) {
        $filter = array("GROUPS_ID" => array(1));
        $by = "personal_country";
        $order = "desc";
        $rsUsers = CUser::GetList($by, $order, $filter);
        $arEmail[] = array();
        while ($arUser = $rsUsers->GetNext()) {

            $arEmail[] = $arUser['EMAIL'];
        }


        if (count($arEmail)>0){
            $arEventFields=array(

                "TEXT"=>count($arItems),
                "EMAIL"=>implode(", ", $arEmail),
            );
    CEvent::Send("CHECK_CATALOG", SITE_ID, $arEventFields);
}

}
}


?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>