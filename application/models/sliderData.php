<?php

    // include __DIR__ . '/model_main.php';

    $pdo = null;
    require __DIR__ . '/../core/std_incl.php';
    $pdo->query("SET CHARACTER SET 'utf8'");
    
    $result3 = $pdo->query("SELECT
        `Img1`, `Img2`, `Img3`, `Title`, `SubTitle`, `Article` 
        FROM `main_page_centers`;");
    
    $imgSrc = $result3;
    $imgSrc= $imgSrc->fetchAll();
    echo json_encode($imgSrc);


?>