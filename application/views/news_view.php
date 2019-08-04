<div class="content__article decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Новости</span>
    </div>

    <div class="content__article_box">
        <?php
            foreach ($data as $row) 
            {

                $basic = 
                '
                    <div class="content__article_elem content__article_imagesBox">
                        <div class="content__article_body">
                            <p class="content__article_date">
                                ' . $row['Date'] . '
                            </p>
                            <span class="content__article_title">
                                <h1>'
                                    . $row['Header'] . '
                                </h1> 
                            </span>

                            <span class="content__article_article">'
                                . $row['Article'] . '
                            </span>
                        </div>
                ';
                $image =  
                '
                    <div class="content__article_imgNews">
                        <div class="content__article_img_elem" style="background-image: url('
                            . $row["Img"] 
                            . ')">
                        </div>
                    </div>
                '; 
                $image2 =  
                '
                    <div class="content__article_img slider__open">
                        <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                            . $row['Img']
                            . ')">
                        </div>
                    </div>
                    <div class="content__article_img slider__open">
                        <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                            . $row['Img2']
                            . ')">
                        </div>
                    </div>
                '; 
                $image3 =  
                '
                    <div class="content__article_img slider__open">
                        <div class="content__article_img_elem content__article_img_licences" style="background-image: url('
                            . $row['Img3']
                            . ')">
                        </div>
                    </div>
                '; 
            
                if (!$row['Img'])
                {
                    echo $basic . '</div>'; 
                };
                if ($row['Img'] && !$row['Img2'])
                {
                    echo $basic . $image . '</div>';
                } else if ($row['Img'] && $row['Img2'] && !$row['Img3']) {
                    echo $basic . $image2 . '</div>';
                } else if ($row['Img'] && $row['Img2'] && $row['Img3']) {
                    echo $basic . $image2 . $image3 . '</div>';
                };
            }
        ?>

    </div>
</div>