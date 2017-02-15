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
<?
echo SITE_TEMPLATE_PATH;
?>








<div class="wrap">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="hd_header_area">


		<?include_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php");?>


	</div>

	<!--- // end header area --->

	<?
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "/products/1/13/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "navigation",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "AUTHOR",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"


		)
	);?>

	<br>
	<br>

	<!--- // end slider area --->

	<div class="main_container homepage">

		<!-- events -->
		<div class="ev_events">
			<div class="ev_h">
				<h3>Ближайшие события</h3>
				<a href="" class="ev_allevents">Все мероприятия &rarr;</a>
			</div>
			<ul class="ev_lastevent">
				<li>
					<h4><a href="">29 августа 2012, Москва</a></h4>
					<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
				</li>
				<li>
					<h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
					<p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
				</li>
				<li>
					<h4><a href="">31 августа 2012, Краснодар</a></h4>
					<p>Открытие нового магазина в нашей дилерской сети.</p>
				</li>
			</ul>
			<div class="clearboth"></div>
		</div>
		<!-- // end events -->
		<div class="cn_hp_content">
			<div class="cn_hp_category">
				<ul>
					<li>
						<img src="/bitrix/templates/.default/content/1.png" alt=""/>
						<h2><a href="">Мягкая мебель</a></h2>
						<p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
						<div class="clearboth"></div>
					</li>
					<li>
						<img src="/bitrix/templates/.default/content/2.png" alt=""/>
						<h2><a href="">Офисная мебель</a></h2>
						<p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
						<div class="clearboth"></div>
					</li>
					<li>
						<img src="/bitrix/templates/.default/content/3.png" alt=""/>
						<h2><a href="">Мебель для кухни</a></h2>
						<p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
						<div class="clearboth"></div>
					</li>
					<li>
						<img src="/bitrix/templates/.default/content/4.png" alt=""/>
						<h2><a href="">Детская мебель</a></h2>
						<p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
						<div class="clearboth"></div>
					</li>
				</ul>
				<a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
			</div>
			<div class="cn_hp_post">
				<div class="cn_hp_post_new">
					<h3>Новинки</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
				<div class="cn_hp_post_action">
					<h3>Акции</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
				<div class="cn_hp_post_bestsellersn">
					<h3>Хиты продаж</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"news_right",
				Array(
					"ACTIVE_DATE_FORMAT" => "j F Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => $_REQUEST["ID"],
					"IBLOCK_TYPE" => "news",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "4",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC"
				)
			);?>

			<br>
			<div class="clearboth"></div>
		</div>
	</div>

	<script type="text/javascript" >
		$(document).ready(function(){

			$("#foo").carouFredSel({
				items:2,
				prev:'#rwprev',
				next:'#rwnext',
				scroll:{
					items:1,
					duration:2000
				}
			});
		});
	</script>

	<div class="rw_reviewed">
		<div class="rw_slider">
			<h4>Отзывы</h4>
			<ul id="foo">
				<li>
					<div class="rw_message">
						<img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
						<span class="rw_name">Сергей Антонов</span>
						<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
						<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
						<div class="clearboth"></div>
						<div class="rw_arrow"></div>
					</div>
				</li>
				<li>
					<div class="rw_message">
						<img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
						<span class="rw_name">Дмитрий Иванов</span>
						<span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
						<p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
						<div class="clearboth"></div>
						<div class="rw_arrow"></div>
					</div>
				</li>
				<li>
					<div class="rw_message">
						<img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
						<span class="rw_name">Сергей Антонов</span>
						<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
						<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
						<div class="clearboth"></div>
						<div class="rw_arrow"></div>
					</div>
				</li>
			</ul>
			<div id="rwprev"></div>
			<div id="rwnext"></div>
			<a href="" class="rw_allreviewed">Все отзывы</a>
		</div>
	</div>

