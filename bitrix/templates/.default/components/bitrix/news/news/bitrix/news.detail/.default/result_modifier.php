<?
/**
 * Created by PhpStorm.
 * User: DV
 * Date: 11.02.2017
 * Time: 4:17
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<?$rsUser = CUser::GetByID($arResult['PROPERTIES']['AUTHOR']['VALUE']);?>
<? //echo "777".$arResult['PROPERTIES']['AUTHOR']['VALUE'];?>

<? $arUser = $rsUser->Fetch();?>
<? //dump($arUser);?>
<? //echo "777".$arUser;?>
<? $arResult['AUTHOR']=$arUser;?>
<? //dump($arResult); ?>

