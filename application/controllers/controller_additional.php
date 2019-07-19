<?php

    class Controller_Additional extends Controller
    {
        function __construct()
        {
            $this -> model = new Model_Additional();
            $this -> view = new View();
        }
        function action_service()
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('additional_view.php', 'template_view.php', $data);
        } 
        function action_rehab() 
        {
            $data = $this -> model -> get_data();
            $this -> view -> generate('rehab_view.php', 'template_view.php', $data);
        }
        function action_equipment() 
        {
            $data3 = $this -> model -> get_data3();
            $this -> view -> generate('equipment_view.php', 'template_view.php', $data3);
        }
    }
?>