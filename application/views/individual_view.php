<div class="content__price decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Индивидуальные занятия</span>
    </div>
    
    <div class="content__price_box">
        

        <div class="content__price_services">
            <span class="content__prices_title">
                Индивидуальные занятия с кинезитерапевтом
            </span>
            <p class="content__prices_info">
                <strong>Занятия с детьми младшего возраста</strong> проводит врач ЛФК, кинезитерапевт, травмотолог-ортопед - Попова Наталья Александровна.
            </p>
            <div class="content__price_servicesTable">
                <table>
                    <tr>
                        <th>Спецификация</th>
                        <th>Количество занятий</th>
                        <th>Продолжителность</th>
                        <th>Стоимость, рублей</th>
                    </tr>
                    <?php
                        foreach(  $data as $row )
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
        </div>


        <div class="content__price_services">
            <span class="content__prices_title">
                Занятия кинезитерапией на дому
            </span>
            <p class="content__prices_info">
                Проводит врач ЛФК, реабилитолог, невролог – Быстрова Лариса Юрьевна.
            </p>
            <div class="content__price_abonementTable">
                <table>
                    <tr>
                        <th>Количество занятий</th>
                        <th>Стоимость, рублей</th>
                    </tr>
                    <?php
                        foreach(  $data2 as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['numb_classes']
                                    . '</td>
                                    <td>'
                                    . $row['cost_series']
                                    . '</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="content__price_services">
            <span class="content__prices_title">
                Занятия с инвалидами
            </span>
            <p class="content__prices_info">
                Проводит ведущий кинезитерапевт, специалист международного нейрореабилитационного центра "АДЕЛИ" (Словакия) – Грекова Анна Александровна.            </p>
            <div class="content__price_abonementTable">
                <table>
                    <tr>
                        <th>Количество занятий</th>
                        <th>Стоимость, рублей</th>
                    </tr>
                    <?php
                        foreach(  $data3 as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['numb_classes']
                                    . '</td>
                                    <td>'
                                    . $row['cost_series']
                                    . '</td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
        </div>

    </div>

</div>

   