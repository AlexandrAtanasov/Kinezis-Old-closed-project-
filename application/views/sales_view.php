<div class="content__sale decoration__select_none">

    <div class="headline decoration__select_none">
        <span>Акции и скидки</span>
    </div>


    <div class="content__price_box">
        <div class="content__price_sale">

            <span class="content__prices_title">
                Действующие скидки для клиентов "КИНЕЗИС"
            </span>
            <p class="content__prices_info">
                Всю актуальную информацию по действующим скидкам и акциям Вы можете узнать по телефону центров "КИНЕЗИС".
            </p>

            <div class="content__price_saleTable">
                <table>
                    <tr>
                        <th>Наименование</th>
                        <th>Бонус</th>
                    </tr>
                    <?php 
                        foreach(  $data as $row )
                        {
                            echo
                                '<tr>
                                    <td>'
                                    . $row['name']
                                    . '</td>
                                    <td>'
                                    . $row['bonus']
                                    . '</td>
                                    <td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>

        </div>
    </div>


</div>


