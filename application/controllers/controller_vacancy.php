<?php

    class Controller_Vacancy extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Vacancy();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('vacancy_view.php', 'template_view.php', $data);
        }
    }

?>