<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<? \Bitrix\Main\Localization\Loc::loadMessages(__FILE__);?>

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