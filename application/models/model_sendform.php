<?php

    class Model_Sendform extends Model
    {
        public function get_data()
        {
            require __DIR__ . "/config.php";
            var_dump($_POST);
            $name = $_POST['name'];
            $number = $_POST['number'];
            var_dump($name);
            var_dump($number);
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $key = $captcha_key;
            $query = $url . '?secret=' . $key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
            $dataG = json_decode(file_get_contents($query));

            if (!$_POST['g-recaptcha-response'])
            {
                echo('Подтвердите, что Вы не робот');
            } elseif ($dataG->success == false)
            {
                echo ('Подтверждение не пройдено');
            } elseif  ( isset($name)&&($name!='')&&isset($number)&&($number!='')&&(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']!='') ) 
            {
                var_dump($name);
                var_dump($number);
                $toAdmin = "mephistosaa@gmail.com";
                $subjCallback = 'Перезвони мне, Кинезис';
                $headers  = "Content-type: text/html; charset=UTF-8 \r\n"; 
                $headers .= "From: От кого письмо <travelingthroughspace@travelingthrough.space>\r\n"; 
                $headers .= "Reply-To: atanasovalexandr@yandex.ru\r\n"; 
                $message = 'Меня зовут - ' . $name . ',' . "\n";
                $message .= 'перезвоните мне, пожалуйста на номер: ' . $number . '.' . "\n";
                $message .= 'Это тестовая рассылка, не пугайтесь. Приходите лечить спину в Кинезис!';
                mail($toAdmin, $subjCallback, $message, $headers);
                
                echo ($name . ", мы скоро Вам перезвоним!");
            } else echo'Сервис временно недоступен';
        }
    }

?>