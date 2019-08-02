<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   
    
    <meta name="keywords" content="" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="ed7b8f4c2b6ac961" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content=""/>
    <title></title>
    
    <link rel="icon" type="image/png" href="/../images/logo/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//code.jivosite.com/widget.js" jv-id="Hv4SlCa4Xd" async></script>

</head>
<body>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(54542998, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
    </script>
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/54542998" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

	<?php
		include(__DIR__ . '/../../html/header.html');
        // include(__DIR__ . '/../../html/navigation.html');
        // include(__DIR__ . '/main_navigation_lists.php' );
		include(__DIR__ . '/main_navigation.php');
		include(__DIR__ . '/../../html/main__content_start.html');

		include(__DIR__ . '/../views/' . $content_view);

        include(__DIR__ . '/../../html/main__content_stop.html');
        include(__DIR__ . '/../../html/footer.html');
        include(__DIR__ . '/../../html/overlay_callback.html');
        // include(__DIR__ . '/../../html/overlay_menu.html');
        // include(__DIR__ . '/main_navigation_lists.php' );
        include(__DIR__ . '/main_overlay_navigation.php');
        include(__DIR__ . '/../../html/overlay_slider.html');
        // include('./html/end.html');
	?>
    
    <script src="../../public/js/script.js"></script>

    </body>
</html>