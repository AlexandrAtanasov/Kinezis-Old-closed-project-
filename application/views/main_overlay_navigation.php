<!-- start callback ovarlay window -->
<?php
    // repair
    $additionalList = Navigation_List::getAdditionalList();
    $problemsList = Navigation_List::getProblemsList();
?>
<div class="overlay__menu_container overlay__mobile overlay__hide">
    
    <div class="overlay__content_buttonBox decoration__select_none">
        <div class="overlay__menu_buttonClose">
            <i class="fas fa-times"></i>
            <span class="overlay__content_button_text">Закрыть</span>
        </div>
    </div>

    <!-- menu box of header -->
    <div class="overlay__menu_nav">
            
        <ul class="nav__menu_list decoration__list_none decoration__select_none decoration__link">
            
            <li>
                <a href="/">Главная</a>
            </li>


            <li class="nav__menu_activities">
                    Решаемые проблемы
            </li>
                <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                    <?php
                        // include ( __DIR__ . '/main_navigation_lists.php' );
                        foreach( $problemsList as $row )
                        {
                            echo
                            '
                                <li>
                                    <span class="nav__menu_problems" id="' . $row['id'] . '">'
                                    . $row['Title']
                                    . '</span>
                                </li>
                            ';
                        }
                    ?>                
                </ul>
        

            <li class="nav__menu_additionalServices">
                Дополнительные услуги
            </li>    
                <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                    <?php
                        // include ( __DIR__ . '/main_navigation_lists.php' );
                        foreach( $additionalList as $row )
                        {
                            echo
                            '
                                <li>
                                    <span class="nav__menu_additional" id="' . $row['id'] . '">'
                                    . $row['Title']
                                    . '</span>
                                </li>
                            ';
                        }
                    ?>
                    <li>
                        <span class="nav__menu_rehab">
                            Реабилитационные занятия для инвалидов
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_equipment">
                            Продажа тренажёров
                        </span>
                    </li>
                </ul>


            <li>
                О нас
            </li>
                <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                    <li>
                        <span class="nav__menu_person">
                            Наша комманда
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_centers">
                            О центрах
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_method">
                            О методике
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_rules">
                            Правила посещения
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_vacancy">
                            Вакансии
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_organizations">
                            Вышестоящие оганизации
                        </span>
                    </li>
                </ul>

            <li>
                Цены
            </li>
                <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                    <li>
                        <span class="nav__menu_priceServices">
                            Стоимость услуг
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_priceIndividual">
                            Стоимость индивидуальных занятий   
                        </span>
                    </li>
                    <li>
                        <span class="nav__menu_priceSale">
                            Акции и скидки
                        </span>
                    </li>
                </ul>  

            <li>
                <span class="nav__menu_news">
                    Новости
                </span>
            </li>
            
            <li>
                <span class="nav__menu_reviews">
                    Отзывы
                </span>
            </li>

            <li>
                <span class="nav__menu_contacts">
                    Контакты
                </span>
            </li>

        </ul>
    </div>
</div>