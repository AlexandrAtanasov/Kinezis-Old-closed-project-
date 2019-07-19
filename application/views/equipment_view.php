<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Продажа тренажёров</span>
    </div>

    <div class="content__article_box">
    
        <div class="content__article_elem">
            <div class="content__article_body">
                <span class="content__article_title">
                    <h1>
                        Центр «Кинезис» является официальным дилером завода спортивного оборудования «АRMS»
                    </h1> 
                </span>
                <span class="content__article_article">
                    <h2>Дорогие друзья!</h2>

                    <p>Для тех, кто летом уезжает на дачу, чтобы эффект от занятий сохранялся, теперь мы можем предложить тренажер для занятий дома!

                    <ul>
                        <li>Чтобы заниматься дома на тренажере самостоятельно, мы настоятельно рекомендуем пройти несколько циклов в центре “Кинезис”</li>
                        <li>Для тех, кто перед покупкой тренажера пройдет полный лечебный цикл занятий в центре “Кинезис”, мы даем рекомендации для занятий в домашних условиях.</li>
                        <li>Мы не рекомендуем заниматься самостоятельно постоянно, программа должна изменяться, в зависимости от результатов. Программа корректируется кинезитерапевтами после очередного прохождения каждого цикла занятий центра.</li>
                    </ul>

                    <p>И не забывайте: «Правильное движение лечит, а неправильное калечит!» С.М.Бубновский</p>
                </span>
            </div>
        </div>

        <?php
            foreach( $data as $row )
            {
                echo 
                    '<div class="content__article_elem">
                    
                        <div class="content__article_img">
                            <div class="content__article_img_elem" style="background-image: url('
                                . $row['Img'] 
                                . ')">
                            </div>
                        </div>
                        
                        <div class="content__article_body">
                            <span class="content__article_title">
                                <h2>'
                                . $row['Title']
                                . ' </h2> 
                            </span>
                            <span class="content__article_article">'
                                . $row['Article']
                            . '</span>
                        </div>
                            
                    </div>'
                ;
            }
        ?>
        
    </div>
</div>
