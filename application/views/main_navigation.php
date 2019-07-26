<!-- menu box of header -->
<?php
include(__DIR__ . '/main_navigation_lists.php' );
?>
<nav>
    <div class="scroll__menu_element">
        
        <div class="nav_container">
            <ul class="nav__menu_list decoration__list_none decoration__select_none decoration__link">
                
                <li>
                    <a href="/">Главная</a>
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
                                    <li>
                                        <span class="nav__menu_problems" id="' . $row['id'] . '">'
                                        . $row['Title']
                                        . '</span>
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
                </li>
               

                <li>Цены
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
                </li>

                <li>О нас
                    <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                        <li>
                            <span class="nav__menu_person">
                                Наша команда
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
                    </ul>
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
</nav>