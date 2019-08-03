<?php

    class Controller_Additional extends Controller
    {
        public function __construct()
        {
            $this -> model = new Model_Additional();
            $this -> view = new View();
        }
        public function action_service()
        {
            $routes = explode( '/', $_SERVER['REQUEST_URI'] );
            if ( !empty($routes[3]) )
            {
                $service = $routes[3];
            };

            if ($service == "reabilitacionnye-zanyatiya-dlya-invalidov") 
            {
                $data2 = $this -> model -> get_data2();
                $this -> view -> generate('rehab_view.php', 'template_view.php', $data2);
            } elseif ($service == "prodazha-trenazherov")
            {
                $data3 = $this -> model -> get_data3();
                $this -> view -> generate('equipment_view.php', 'template_view.php', $data3);
            } else 
            {
                $data = $this -> model -> get_data();
                $this -> view -> generate('additional_view.php', 'template_view.php', $data);
            }

        } 
    }
?>