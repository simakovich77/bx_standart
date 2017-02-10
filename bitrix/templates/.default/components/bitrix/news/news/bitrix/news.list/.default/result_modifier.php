
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//dump($arParams);

//var_dump($arItems['DETAIL_PICTURE']);


foreach ($arResult["ITEMS"] as $ID=>$arItems)
{
    $arImage=CFile::ResizeImageGet($arItems['DETAIL_PICTURE'], array('width'=>$arParams['LIST_PREV_PICT_W'], 'height'=>$arParams['LIST_PREV_PICT_H']), BX_RESIZE_IMAGE_EXACT, true);

//var_dump($arImage);
    //echo $ID;

$arResult["ITEMS"][$ID]['DETAIL_PICTURE']=$arImage;
    //var_dump(["ITEMS"][$d]);exit;
   // var_dump(["ITEMS"][$d]);

   // echo "d=".$d;
    //var_dump($arResult["ITEMS"][$ID]['DETAIL_PICTURE']); exit;
}


//echo $arItems['DETAIL_PICTURE'];


//var_dump($arResult["ITEMS"][$d]['DETAIL_PICTURE']);
//dump($arResult);
    ?>
