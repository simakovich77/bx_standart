<?
/**
 * Created by PhpStorm.
 * User: DV
 * Date: 11.02.2017
 * Time: 4:17
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<?$cp = $this->__component;?>
<?if($arResult['PROPERTIES']['AUTHOR']['VALUE']) {?>
<?$rsUser = CUser::GetByID($arResult['PROPERTIES']['AUTHOR']['VALUE']);?>
<? //echo "777".$arResult['PROPERTIES']['AUTHOR']['VALUE'];?>

<? $arUser = $rsUser->Fetch();?>
<? //dump($arUser);?>
<? //echo "777".$arUser;?>
<? $arResult['AUTHOR']=array($arUser["NAME"],$arUser["LAST_NAME"]);?>
<? //dump($arResult); }?>
<?$cp->setResultCacheKeys(array("AUTHOR"));?>
<?}?>
<?$arResult["DETAIL_TEXT_50"]=substr($arResult["DETAIL_TEXT"],0,50)."...";?>
<?$cp->setResultCacheKeys(array("DETAIL_TEXT_50"));?>
