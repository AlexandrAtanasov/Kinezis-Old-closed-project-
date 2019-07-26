<!-- set desc and title -->
<script type="text/javascript">
    $(document).ready(function() {
        var pageTitle = "Персонал | Сеть центров кинезитерапии «КИНЕЗИС» в центре Перми, Мотовилихе и Закамске";
        var pageDescription = "«КИНЕЗИС» - центры кинезитерапии в Перми на Екатерининской 165, Крупской 31 и М.Рыбалко 85в. Персонал центров - опытная команда врачей - специалистов по кинезитерапии и инструкторов - методистов. Специалисты центра обучались в Москве по методике профессора Бубновского Сергея Михайловича. Врачи и инструкторы центра регулярно повышают свою квалификацию, посещая  медицинские конференции в городе Пермь и Москва.";
        document.title = pageTitle;
        document.querySelector('meta[name="description"]').setAttribute("content", pageDescription);
    });
</script>
<!-- set desc and title -->

<!-- view for persons on a persons page -->
<div class="content__person decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Наши доктора</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach(  $data as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                            . $row['Img'] 
                            . ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' ' 
                                . '- ' 
                                . $row['Position'] . 
                            '</span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

    <div class="headline decoration__select_none">
        <span>Наши главные инструктора</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach(  $data2 as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                            . $row['Img'] 
                            . ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' ' 
                                . '- ' 
                                . $row['Position'] . 
                            '</span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

    <div class="headline decoration__select_none">
        <span>Наши инструктора</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach(  $data3 as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                            . $row['Img'] 
                            . ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' ' 
                                . '- ' 
                                . $row['Position'] . 
                            '</span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

</div>