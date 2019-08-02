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
                        foreach( $problemsList as $row )
                        {
                            echo
                            '
                                <li class="nav__menu_problems" id="' . $row['TitleURL'] . '">
                                    '. $row['Title'].'
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
                        foreach( $additionalList as $row )
                        {
                            echo
                            '
                                <li class="nav__menu_additional" id="' . $row['TitleURL'] . '">
                                    '. $row['Title'] .'
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


            <li>
                О нас
            </li>
                <ul class='nav__menu_drop decoration__select_none decoration__list_none'>
                    <li class="nav__menu_person">
                        <span>
                            Наша комманда
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

            <li>
                Цены
            </li>
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