<?php
    if( (isset($_POST['name'])&&$_POST['name']!="") &&
        (isset($_POST['number'])&&$_POST['number']!="")) {

        $toAdmin = 'mephistosaa@gmail.com';
        $subjCallback = 'Перезвони мне, Кинезис';
        $message = 'Меня зовут - ' . $_POST['name'] . ',' . "\n";
        $message .= 'перезвоните мне, пожалуйста на номер: ' . $_POST['number'] . '.' . "\n";
        $message .= 'Это тестовая рассылка, не пугайтесь. Приходите лечить спину в Кинезис!';
        mail($toAdmin, $subjCallback, $message);
        echo '<script>window.close()</script>';
    } 
?>