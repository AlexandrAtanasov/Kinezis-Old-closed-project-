<!-- view for persons on a persons page -->
<div class="content__person decoration__select_none">
    
    <div class="headline decoration__select_none">
        <span>Наши доктора</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach( $data as $row )
            {
               echo 
        
                    '
                    <div class="content__person_elem content__person_elem_doctors">
                    
                        <div class="content__person_img">
                            <div class="content__person_img_elem" style="background-image: url(' 
                                . $row['Img'] .
                            ')">
                            </div>
                        </div>
                    
                        <div class="content__person_info">
                            <span class="content__person_fio">'
                                . $row['FirstName'] . ' '
                                . $row['LastName'] . ' 
                            </span> 
                            <p>' 
                                . $row['About'] . 
                            '</p> <br/>
                            <p>' 
                                . $row['Review'] . 
                            '</p>
                        </div> 

                    </div>
                    ';
            }

        ?>
    </div>

    <div class="headline decoration__select_none">
        <span>Наши старшие инструкторы</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach( $data2 as $row )
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
                                . $row['LastName']  . '
                            </span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

    <div class="headline decoration__select_none">
        <span>Наши инструкторы</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach( $data3 as $row )
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
                                . $row['LastName']  . '
                            </span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

    <div class="headline decoration__select_none">
        <span>Наши администраторы</span>
    </div>
    <div class="content__person_box">
        <?php
            foreach( $data4 as $row )
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
                                . $row['LastName']  . '
                            </span> 
                            <p>' 
                                . $row['About'] . 
                            '</p>
                        </div> 

                    </div>';
            }

        ?>
    </div>

</div>