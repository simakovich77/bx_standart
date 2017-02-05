<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?$APPLICATION->ShowHead();?>
	<meta charset="windows-1251">
	<title></title>

	<!--<link rel="stylesheet" href="/bitrix/templates/.default/template_style.css"/>-->
	<?
	use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addCss("/bitrix/templates/.default/template_style.css");
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
<body>

	<div class="wrap">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>





            <?include_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php");?>
     




		
		<!--- // end header area --->
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "nav",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<h1>Заголовок страницы</h1>
						</div>