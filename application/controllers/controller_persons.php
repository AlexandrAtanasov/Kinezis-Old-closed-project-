<?php

    class Controller_Persons extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Persons();
            $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            $data2 = $this -> model -> get_data2();
            $data3 = $this -> model -> get_data3();
            $data4 = $this -> model -> get_data4();
            $this -> view -> generate('persons_view.php', 'template_view.php', $data, $data2, $data3, $data4);
        }
    }
?>