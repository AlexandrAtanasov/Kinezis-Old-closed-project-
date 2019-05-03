<?php

    class Controller_Price extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Price();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $data2 = $this -> model -> get_data2();
            $data3 = $this -> model -> get_data3();
            $this -> view -> generate('price_view.php', 'template_view.php', $data, $data2, $data3);
        }
    }
?>