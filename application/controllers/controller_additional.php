<?php

    class Controller_Additional extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Additional();
            $this -> view = new View();
        }

        // function action_index()
        // {
        //     $data = $this -> model -> get_data();
        //     $this -> view -> generate('additional_view.php', 'template_view.php', $data);
        // }

        function action_service()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('additional_view.php', 'template_view.php', $data);
        } 
    }
?>