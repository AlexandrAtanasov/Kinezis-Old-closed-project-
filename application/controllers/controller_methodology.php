<?php

    class Controller_Methodology extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Methodology();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('methodology_view.php', 'template_view.php', $data);
        }
    }

?>