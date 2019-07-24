<?php

    class Controller_Individual extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Individual();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $data2 = $this -> model -> get_data2();
            $data3 = $this -> model -> get_data3();
            $this -> view -> generate('individual_view.php', 'template_view.php', $data, $data2, $data3);
        }
    }
?>