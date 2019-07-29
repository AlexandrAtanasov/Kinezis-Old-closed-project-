<!-- set desc and title -->
<script type="text/javascript">
    $(document).ready(function() {
        var pageTitle = "Вакансии | Сеть центров кинезитерапии «КИНЕЗИС» в центре Перми, Мотовилихе и Закамске";
        var pageDescription = "Центр кинезитерапии «КИНЕЗИС». Открытые вакансии в центры кинезитерапии города Пермь.";
        document.title = pageTitle;
        document.querySelector('meta[name="description"]').setAttribute("content", pageDescription);
    });
</script>
<!-- set desc and title -->

<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Вакансии</span>
    </div>

    <div class="content__article_box">
        <?php

            foreach(  $data as $row )
            {
                echo 
                    '<div class="content__article_elem">

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

                    </div>';
            }

        ?>
    </div>
</div>