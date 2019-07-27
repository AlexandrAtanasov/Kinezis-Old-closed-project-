<?php

    class Controller_Organizations extends Controller
    {
        function action_index()
        {
            $this->view->generate('organizations_view.php', 'template_view.php');
        }
    }

?>