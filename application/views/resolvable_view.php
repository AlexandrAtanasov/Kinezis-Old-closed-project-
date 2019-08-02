<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>С чем мы работаем</span>
    </div>

    <div class="content__article_box">
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
                                <h1>'
                                . $row['Title']
                                . ' </h1> 
                            </span>
                            <span class="content__article_article">'
                                . $row['Article']
                            . '</span>
                        </div>
                            
                    </div>
                    
                    <!-- set description and title -->
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var pageTitle = "'. $row['Title'] . ' | Сеть центров кинезитерапии «КИНЕЗИС» в центре Перми, Мотовилихе и Закамске";
                            document.title = pageTitle;
                            
                            
                            var pageDescription = "'. $row['DescriptionText'] . '";
                            document.querySelector(\'meta[name="description"]\').setAttribute("content", pageDescription);
                        });
                    </script>
                    <!-- set description and title -->
                    '
                ;
            }
        ?>
    </div>
</div>
