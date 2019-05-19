<div class="content__article decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Наши центры</span>
    </div>

    <div class="content__article_box">
        <?php
    
            foreach(  $data3 as $row )
            {
                echo 
                    '<div class="content__article_elem">

                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem" style="background-image: url('
                                . $row['Img1'] 
                                . ')">
                            </div>
                        </div>
                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem" style="background-image: url('
                                . $row['Img2'] 
                                . ')">
                            </div>
                        </div>
                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem" style="background-image: url('
                                . $row['Img3'] 
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

                    </div>';
            }
       
        ?>
    </div>

</div>