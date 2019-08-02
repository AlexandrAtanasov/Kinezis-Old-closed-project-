<!--set desc and title -->
<script type="text/javascript">
    $(document).ready(function() {
        var pageTitle = "«КИНЕЗИС» - Центры кинезитерапии";
        var pageDescription = "«КИНЕЗИС» - центры кинезитерапии в Перми на Екатерининской 165, Крупской 31 и М.Рыбалко 85в. Персонал центров - опытная команда врачей - специалистов по кинезитерапии и инструкторов - методистов. Специалисты центра обучались в Москве по методике профессора Бубновского Сергея Михайловича. Врачи и инструкторы центра регулярно повышают свою квалификацию, посещая  медицинские конференции в городе Пермь и Москва. Центр кинезитерапии «КИНЕЗИС» является клинической базой медицинской академии города Перми и ведет успешное сотрудничество с кафедрой спортивной медицины. На базе центров кинезитерапии «КИНЕЗИС» проводятся обучающие занятия для студентов медицинской академии.";
        document.title = pageTitle;
        document.querySelector('meta[name="description"]').setAttribute("content", pageDescription);
    });
</script>
<!-- set desc and title -->



<?php
 
    include(__DIR__ . '/main_view_carousel.php');
    include(__DIR__ . '/../../html/main__content_activities.html');
    include(__DIR__ . '/main_view_persons.php');
    include(__DIR__ . '/main_view_advantages.php');
    include(__DIR__ . '/main_view_centers.php');
    include(__DIR__ . '/main_view_licences.php');
?>