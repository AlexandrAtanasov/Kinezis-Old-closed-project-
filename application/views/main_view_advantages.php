<div class="content__person decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Наши преимущества</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach(  $data2 as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['Title'] .
                            '</span> 
                            <p>' 
                                . $row['Article'] . 
                            '</p>
                        </div> 

                    </div>';

            }

        ?>
    </div>
</div>
