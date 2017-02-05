<!-- workarea -->
</div>
</div>
<div class="sb_sidebar">
    
    <?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("");

    ?><?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "inner_left",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "inner_left"
        ),
        false
    );?><br>
    <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


    <div class="sb_event">
        <div class="sb_event_header"><h4>Ближайшие события</h4></div>
        <p><a href="">29 августа 2012, Москва</a></p>
        <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
    </div>
    <div class="sb_action">
        <a href=""><img src="content/11.png" alt=""/></a>
        <h4>Акция</h4>
        <h5><a href="">Мебельная полка всего за 560 Р </a></h5>
        <a href="" class="sb_action_more">Подробнее &rarr;</a>
    </div>
    <div class="sb_text_block">
        Покупая мебель в нашем Интернет-магазине, вы можете быть уверены в качестве мебели - ведь мы работаем только с крупными и проверенными производителями.
    </div>
    <div class="sb_reviewed">
        <img src="content/8.png" class="sb_rw_avatar" alt=""/>
        <span class="sb_rw_name">Сергей Антонов</span>
        <span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>
</div>
<div class="clearboth"></div>
</div>
</div>







<?include_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php");?>
</div>
</body>
</html>