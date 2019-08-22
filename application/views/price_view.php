<div class="content__price decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Стоимость услуг</span>
    </div>
    
    <div class="content__price_box">
        

        <div class="content__price_services">
            <span class="content__prices_title">
                Консультации
            </span>
            <div class="content__price_servicesTable">
                <table>
                    <tr>
                        <th>Услуга</th>
                        <th>Продолжителность</th>
                        <th>Стоимость</th>
                    </tr>
                    <?php
                        foreach(  $data as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['service']
                                    . '</td>
                                    <td>'
                                    . $row['duration']
                                    . '</td>
                                    <td>'
                                    . $row['cost']
                                    . '</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
        </div>


        <div class="content__price_abonement">
            <span class="content__prices_title">
                Основная лечебная программа
            </span>
            <p class="content__prices_info">
                В стоимость любой программы входят: осмотры, консультации, наблюдение врача. <br>
                В стоимость каждого занятия входит индивидуальная работа инструктора – методиста.
            </p>
            <div class="content__price_abonementTable">
                <table>
                    <tr>
                        <th>Спецификация</th>
                        <th>Количество занятий</th>
                        <th>Срок действия</th>
                        <th>Продолжительность занятия</th>
                        <th>Стоимость, рублей</th>
                    </tr>
                    <?php
                        foreach(  $data2 as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['series']
                                    . '</td>
                                    <td>'
                                    . $row['numb_classes']
                                    . '</td>
                                    <td>'
                                    . $row['period']
                                    . '</td>
                                    <td>'
                                    . $row['class_duration']
                                    . '</td>
                                    <td>'
                                    . $row['cost_series']
                                    . '</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
            <p class="content__prices_info">
                Посещение занятий — в любое время работы центра «Кинезис».
                <br/>
                При перерыве с момента последнего занятия более 6 месяцев клиент обязан пройти консультацию   врача-кинезитерапевта и начать занятия с первого цикла основной программы.
            </p>

        </div>


        <div class="content__price_support">
            <span class="content__prices_title">
                Поддерживающая программа
            </span>
            <p class="content__prices_info">
                В стоимость каждого занятия входит индивидуальная работа инструктора-методиста.<br>
                Занятия проводятся после успешного завершения основной программы.<br>
                Время посещения занятий — в любое время работы центра «Кинезис».<br>
                При перерыве с момента последнего занятия более 6 месяцев клиент обязан пройти консультацию и продолжить занятия по назначению врача-кинезитерапевта.<br>
                Любой цикл можно заморозить по предварительному заявлению.
            </p>
            <div class="content__price_supportTable">
                <table>
                    <tr>
                        <th>Спецификация</th>
                        <th>Количество занятий</th>
                        <th>Срок действия</th>
                        <th>Продолжительность занятия</th>
                        <th>Стоимость, рублей</th>
                    </tr>
                    <?php
                        foreach(  $data3 as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['series']
                                    . '</td>
                                    <td>'
                                    . $row['numb_classes']
                                    . '</td>
                                    <td>'
                                    . $row['period']
                                    . '</td>
                                    <td>'
                                    . $row['class_duration']
                                    . '</td>
                                    <td>'
                                    . $row['cost_series']
                                    . '</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
            <p class="content__prices_info">
                Занятия проводятся после успешного завершения основной программы.<br>
                Посещение занятий — в любое время работы центра «Кинезис».<br>
                При перерыве с момента последнего занятия более 6 месяцев клиент обязан пройти консультацию и продолжить занятия по назначению врача-кинезитерапевта.<br>
                Любой цикл можно заморозить по предварительному заявлению.
            </p>
        </div>
    

    </div>

</div>

