<!-- menu box of header -->
<?php
include(__DIR__ . '/main_navigation_lists.php' );
?>
<nav>
    <div class="scroll__menu_element">
        
        <div class="nav_container">
            <ul class="nav__menu_list decoration__list_none decoration__select_none decoration__link">
            
                <li class="nav__menu_main">
                    <span>Главная</span>
                </li>


                <li>
                    <span class="nav__menu_activities">
                        Решаемые проблемы
                    </span>
                    <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                        <?php
                            // include ( __DIR__ . '/main_navigation_lists.php' );
                            foreach( $problemsList as $row )
                            {
                                echo
                                '
                                    <li class="nav__menu_problems" id="' . $row['TitleURL'] . '">
                                        '. $row['Title']. '
                                    </li>
                                ';
                            }
                        ?>
                    </ul>
                </li>


                <li>
                    <span class="nav__menu_additionalServices">
                        Дополнительные услуги
                    </span>
                    <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                        <?php
                            // include ( __DIR__ . '/main_navigation_lists.php' );
                            foreach( $additionalList as $row )
                            {
                                echo
                                '
                                    <li class="nav__menu_additional" id="' . $row['TitleURL'] . '">
                                       '. $row['Title'] . '
                                    </li>
                                ';
                            }
                        ?>
                        <li class="nav__menu_rehab">
                            <span>
                                Реабилитационные занятия для инвалидов
                            </span>
                        </li>
                        <li class="nav__menu_equipment">
                            <span>
                                Продажа тренажёров
                            </span>
                        </li>
                    </ul>
                </li>
               

                <li>Цены
                    <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                        <li class="nav__menu_priceServices">
                            <span>
                                Стоимость услуг
                            </span>
                        </li>
                        <li class="nav__menu_priceIndividual">
                            <span>
                                Стоимость индивидуальных занятий   
                            </span>
                        </li>
                        <li class="nav__menu_priceSale">
                            <span>
                                Акции и скидки
                            </span>
                        </li>
                    </ul>  
                </li>

                <li>О нас
                    <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                        <li class="nav__menu_person">
                            <span>
                                Наша команда
                            </span>
                        </li>
                        <li class="nav__menu_centers">
                            <span>
                                О центрах
                            </span>
                        </li>
                        <li class="nav__menu_method">
                            <span>
                                О методике
                            </span>
                        </li>
                        <li class="nav__menu_rules">
                            <span>
                                Правила посещения
                            </span>
                        </li>
                        <li class="nav__menu_vacancy">
                            <span>
                                Вакансии
                            </span>
                        </li>
                        <li class="nav__menu_organizations">
                            <span>
                                Вышестоящие оганизации
                            </span>
                        </li>
                    </ul>
                </li>

                <li class="nav__menu_news">
                    <span>
                        Новости
                    </span>
                </li>

                <li class="nav__menu_reviews">
                    <span>
                        Отзывы
                    </span>
                </li>

                <li class="nav__menu_contacts">
                    <span>
                        Контакты
                    </span>
                </li>

            </ul>
        </div>

    </div>
</nav>