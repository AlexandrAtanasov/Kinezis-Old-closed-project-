<div class="content__article decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Акции</span>
    </div>

    <div class="content__article_box">
        <div class="content__article_elem content__article_carousel" style="width: 600px; height:400px;">
            <ul class="content__carousel_box" style="display:none;">
                <?php
                    foreach( $data5 as $row )
                    {
                        echo 
                            '<li class="content__article_img carousel__elem">'
                                . $row['Img'] .
                            '</li>';
                    }
                ?>
            </ul>
        </div>
    </div>

</div>