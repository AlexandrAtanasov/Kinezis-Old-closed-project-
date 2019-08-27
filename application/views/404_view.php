<div class="content__article decoration__select_none">

    <div class="headline decoration__select_none">
        <span>Внимание</span>
    </div>

    <div class="content__article_box">
        <div class="content__article_elem">
            <div class="content__article_body">
                
                <span class="content__article_title">
                    <h1>Страница не найдена</h1> 
                </span>

                <span class="content__article_article">
                    <p>
                        Запрашиваемая Вами страница 
                        <?php
                            $requestedPage = $_SERVER['REQUEST_URI'];
                            echo ($requestedPage);
                        ?>
                        не найдена!
                    </p>
                    <br/>
                    <p>Вы будете перенаправлены на главную страницу через <span class="error__info_timer">5</span> сек.</p>
                </span>

            </div>
        </div>
    </div>

</div>

<script>
    var i = 4;
    var time = setTimeout(function printTime(){
        if (i >= 0)
        {
            $('.error__info_timer').text(i);
            i--;
            time = setTimeout(printTime, 1000);
        };
    }, 1000);    

    setTimeout(function(){
        location.href = '/';
    }, 5000);
</script>