<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>



    <!--<link rel="stylesheet" href="/bitrix/templates/.default/template_style.css"/>-->
    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss("/template_style.css");
    //Asset::getInstance()->addString("<link href=". SITE_TEMPLATE_PATH . "'/bitrix/templates/.default/template_style.css\' rel='stylesheet' type='text/css'>");
    ?>
    <?


    Asset::getInstance()->addJs("/bitrix/templates/.default/js/jquery-1.8.2.min.js");
    Asset::getInstance()->addJs("/bitrix/templates/.default/js/slides.min.jquery.js");
    Asset::getInstance()->addJs("/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");
    Asset::getInstance()->addJs("/bitrix/templates/.default/js/functions.js");
    ?>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->

    <? \Bitrix\Main\Localization\Loc::loadMessages(__FILE__);?>
    <?=GetMessage('MY_LANG_MESSAGE');?>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>

<div style="border:red solid 1px">
	<form action="/bitrix/admin/site_edit.php" method="GET">
		<input type="hidden" name="LID" value="<?=SITE_ID?>" />
		<p><font style="color:red"><?echo GetMessage("DEF_TEMPLATE_NF")?> </font></p>
		<input type="submit" name="set_template" value="<?echo GetMessage("DEF_TEMPLATE_NF_SET")?>" />
	</form>
</div>

<?endif?>