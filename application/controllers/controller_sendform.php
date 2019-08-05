<?php

    class Controller_Sendform extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Sendform();
            // $this -> view = new View();
        }

        function action_index()
        {
            $data = $this -> model -> get_data();
            // $this -> view -> generate('sales_view.php', 'template_view.php', $data);
        }
    }
?>