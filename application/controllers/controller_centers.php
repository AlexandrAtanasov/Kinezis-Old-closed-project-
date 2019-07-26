<?php

    class Controller_Centers extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Centers();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('centers_view.php', 'template_view.php', $data);
        }
    }

?>