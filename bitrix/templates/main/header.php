﻿<!DOCTYPE HTML>
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
			<div class="hd_header">

			</div>
		</div>

		<!--- // end header area --->
		
		<script type="text/javascript" >
			$().ready(function(){
				$(function(){
					$('#slides').slides({
						preload: true,
						generateNextPrev: false,
						autoHeight: true,
						play: 4000,
						effect: 'fade'
					});
				});
			});
		</script>
		
		<div class="sl_slider" id="slides">
			<div class="slides_container">
				<div>
					<div>
						<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
						<h2><a href="">Диваны и кресла</a></h2>
						<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
						<a href="" class="sl_more">Подробнее &rarr;</a>
					</div>
				</div>
				<div>
					<div>
						<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
						<h2><a href="">Диваны и кресла</a></h2>
						<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
						<a href="" class="sl_more">Подробнее &rarr;</a>
					</div>
				</div>
			</div>
		</div>

		
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
				<div class="cn_hp_lastnews">
					<h3><a href="">Новости</a></h3>		
					<ul>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Поступление лучших офисных кресел из Германии</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Мастер-класс дизайнеров из Италии для производителей мебели</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Открытие нашего нового офиса рядом с метро Измайлово</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани</p>
						</li>					
					</ul>
					<br/>
					<a href="" class="cn_hp_lastnews_more">Все новости &rarr;</a>
				</div>
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
		
		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
					<h4>О магазине</h4>
					<ul>
						<li><a href="">Отзывы</a></li>
						<li><a href="">Контакты</a></li>
						<li><a href="">Руководство</a></li>
						<li><a href="">История</a></li>
					</ul>
				</div>
				<div class="ft_catalog">
					<h4>Каталог товаров</h4>
					<ul>
						<li><a href="">Кухни</a></li>
						<li><a href="">Кровати и кушетки</a></li>
						<li><a href="">Гарнитуры</a></li>
						<li><a href="">Тумобчки и прихожие</a></li>
						<li><a href="">Спальни и матрасы</a></li>
						<li><a href="">Аксессуары</a></li>
						<li><a href="">Столы и стулья</a></li>
						<li><a href="">Каталоги мебели</a></li>
						<li><a href="">Раскладные диваны</a></li>
						<li><a href="">Кресла</a></li>
					</ul>
					
				</div>