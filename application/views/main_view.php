<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Это тайтл для главной страницы';
        document.querySelector('meta[name="description"]').setAttribute("content", "Это дескрипшн для главной страницы");

    });

</script>

<?php
    include(__DIR__ . '/main_view_carousel.php');
    include(__DIR__ . '/../../html/main__content_activities.html');
    include(__DIR__ . '/main_view_persons.php');
    include(__DIR__ . '/main_view_advantages.php');
    include(__DIR__ . '/main_view_centers.php');
    include(__DIR__ . '/main_view_licences.php');
?>