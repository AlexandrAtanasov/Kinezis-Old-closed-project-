<!-- set desc and title -->
<script type="text/javascript">
    $(document).ready(function() {
        var pageTitle = "О центрах | Сеть центров кинезитерапии «КИНЕЗИС» в центре Перми, Мотовилихе и Закамске";
        var pageDescription = "Медицинский центр кинезитерапии «КИНЕЗИС» на Крупской 31 является клинической базой медицинской академии города Перми. Приём осуществляет врач-кинезитерапевт, врач ЛФК. Занятия ведут инструкторы-методисты.";
        document.title = pageTitle;
        document.querySelector('meta[name="description"]').setAttribute("content", pageDescription);
    });
</script>
<!-- set desc and title -->

<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>О центрах</span>
    </div>

    <div class="content__article_box">
        <?php

            foreach ($data as $row)
            {
                echo 
                    '
                    <div class="content__article_elem">

                        <div class="content__article_img">
                            <div class="content__article_img_elem" style="background-image: url('
                                . $row["Img"] 
                                . ')">
                            </div>
                        </div>
                        <div class="content__article_body">

                            <span class="content__article_title">
                                <h1>'
                                . $row['Title']
                            . ' </h1> 
                            </span>
                            <span class="content__article_article">'
                                . $row['Article']
                            . '</span>
                        </div>

                    </div>
                    '
                ;
            }
        ?>

    </div>
</div>