<div class="content__article decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Наши лицензии</span>
    </div>

    <div class="content__article_box">
        <?php
    
            foreach(  $data4 as $row )
            {
                echo 
                    '<div class="content__article_elem content__article_licences">

                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                                . $row['Img1'] 
                                . ')">
                            </div>
                        </div>
                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                                . $row['Img2'] 
                                . ')">
                            </div>
                        </div>
                        <div class="content__article_img slider__open">
                            <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                                . $row['Img3'] 
                                . ')">
                            </div>
                        </div>

                    </div>'
                ;
            }
       
        ?>
    </div>

</div>