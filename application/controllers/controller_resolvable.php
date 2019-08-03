<?php

    class Controller_Resolvable extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Resolvable();
            $this -> view = new View();
        }

        function action_problem()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('resolvable_view.php', 'template_view.php', $data);
        } 
    }
?>