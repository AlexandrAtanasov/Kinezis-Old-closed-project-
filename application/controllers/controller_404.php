<?php

    class Controller_404 extends Controller
    {
        function __construct()
        {
            $this -> view = new View();
        }
        function action_404()
        {
            include ( __DIR__ . '/../core/404_report.php');
            $this->view->generate('404_view.php', 'template_view.php');
        }

    }

?>