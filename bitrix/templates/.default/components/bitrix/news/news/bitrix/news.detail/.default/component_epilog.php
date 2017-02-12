<?
/**
 * Created by PhpStorm.
 * User: DV
 * Date: 11.02.2017
 * Time: 4:17
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//dump($arResult);

if(is_array($arResult["AUTHOR"])) {


    $str = $arResult["NAME"] . ", " . implode(", ", $arResult["AUTHOR"]) . ", " . $arResult["DETAIL_TEXT_50"];

}

else{


    $str = $arResult["NAME"];
}

$APPLICATION->SetPageProperty("description",$str);
    ?>