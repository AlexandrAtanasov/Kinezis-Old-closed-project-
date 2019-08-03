<!-- set desc and title -->
<script type="text/javascript">
    $(document).ready(function() {
        var pageTitle = "Кинезитерапия | Сеть центров кинезитерапии «КИНЕЗИС» в центре Перми, Мотовилихе и Закамске";
        var pageDescription = "Слово «кинезитерапия» происходит от: «кинезис» — движение и «терапия» — лечение. Инструкторы центра «КИНЕЗИС» подберут комплекс упражнений, позволяющий снять болевой синдром и снизить риск возникновения заболеваний позвоночника и суставов.";
        document.title = pageTitle;
        document.querySelector('meta[name="description"]').setAttribute("content", pageDescription);
    });
</script>
<!-- set desc and title -->

<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Методология</span>
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
                            <span class="content__article_subtitle">
                                <h2>'
                                . $row['SubTitle']
                            . '</h2> </span>
                            <span class="content__article_article">'
                                . $row['Article']
                            . '</span>
                        </div>

                    </div>
                    ';
            }

        ?>

    </div>
</div>