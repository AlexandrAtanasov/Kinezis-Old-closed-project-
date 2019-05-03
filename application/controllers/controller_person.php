<?php

    class Controller_Person extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Person();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('person_view.php', 'template_view.php', $data);
        }
    }
?>