<?php

    class Model_Sendform extends Model
    {
        public function get_data()
        {
            if( (isset($_POST['name'])&&$_POST['name']!="") &&
            (isset($_POST['number'])&&$_POST['number']!="") ) 
            {
                $toAdmin = "mephistosaa@gmail.com";
                $subjCallback = 'Перезвони мне, Кинезис';
                $headers  = "Content-type: text/html; charset=UTF-8 \r\n"; 
                $headers .= "From: От кого письмо <travelingthroughspace@travelingthrough.space>\r\n"; 
                $headers .= "Reply-To: atanasovalexandr@yandex.ru\r\n"; 
                $message = 'Меня зовут - ' . $_POST['name'] . ',' . "\n";
                $message .= 'перезвоните мне, пожалуйста на номер: ' . $_POST['number'] . '.' . "\n";
                $message .= 'Это тестовая рассылка, не пугайтесь. Приходите лечить спину в Кинезис!';
                mail($toAdmin, $subjCallback, $message, $headers);
                
                echo ($_POST['name']);
            } 
        }
    }

?>