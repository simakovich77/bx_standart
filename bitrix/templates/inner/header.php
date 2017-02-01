
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
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1>

								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/include/logo.php"
									)
								);?>
								
							</h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/include/phone.php"
									)
								);?>



							</span>	<br/>
							<?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<?$APPLICATION->IncludeComponent(
								"bitrix:system.auth.form",
								"auth",
								Array(
									"FORGOT_PASSWORD_URL" => "/user/",
									"PROFILE_URL" => "/user/profile.php",
									"REGISTER_URL" => "/user/registration.php",
									"SHOW_ERRORS" => "N"
								)
							);?><br>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span>Компания</span></a>
							<ul>
								<li><a href="">Пункт 1</a></li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Новости</span></a></li>
						<li><a href=""><span>Каталог</span></a></li>
						<li><a href=""><span>Фотогалерея</span></a>
							<ul>
								<li><a href="">Пункт 1</a>
									<ul>
										<li><a href="">Пункт 1</a></li>
										<li><a href="">Пункт 2</a></li>
									</ul>
								</li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Партнерам</span></a></li>
						<li><a href=""><span>Контакты</span></a></li>
						<div class="clearboth"></div>
					</ul>
				</div>
			</div>
		</div>
		
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