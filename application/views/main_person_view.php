<!-- view for persons for a main page -->
<div class="content__person decoration__select_none">
    <div class="headline decoration__select_none">
        <span>Наша комманда</span>
    </div>
    <div class="content__person_box">
        <?php
            require_once(__DIR__ . '/../models/main_page_person.php');
            // foreach(  $data as $row )
            foreach(  $result as $row )
            {
               echo 
                    '<div class="content__person_elem">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                            . $row['Img'] 
                            . ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' ' 
                                . '- ' 
                                . $row['Position'] . 
                            '</span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>
</div>