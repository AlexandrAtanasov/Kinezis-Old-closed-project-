<?php
/* 
     starting Controllers methods
     which one will start generate views of pages 
 */
    class Route
    {
        static function start() 
        {
            // controller and default action
            $controller_name = 'Main';
            $action_name = 'index';

            $routes = explode( '/', $_SERVER['REQUEST_URI'] );
            
            // get controller's name
            if ( !empty($routes[1]) )
            {
                $controller_name = $routes[1];
            };

            // get action's name
            if ( !empty($routes[2]) )
            {
                $action_name = $routes[2];
            };

            //yandex direct exception
            $yandexReg = '/.?yclid=/m';
            if (!empty($routes[1]) && (preg_match($yandexReg, $routes[1]) )) 
            {
                $controller_name = 'Main';
                $action_name = 'index';
            };
           

            // set prefixes
            $model_name = 'Model_' . $controller_name;
            $controller_name = 'Controller_' . $controller_name;
            $action_name = 'action_' . $action_name;

            // connection a model class file
            $model_file = strtolower($model_name) . '.php';
            $model_path = 'application/models/' . $model_file;
            if ( file_exists($model_path) )
            {
                include 'application/models/' . $model_file;
            }

            // connection a controller class file
            $controller_file = strtolower($controller_name) . '.php';
            $controller_path = 'application/controllers/' . $controller_file;
            if ( file_exists($controller_path) )
            {
                include 'application/controllers/' . $controller_file;
            } else
            {
                Route::ErrorPage404();
            }

            // create a controller
            $controller = new $controller_name;
            $action = $action_name;

            if ( method_exists($controller, $action) )
            {
                // call action of controller
                $controller->$action();
            } else 
            {
                Route::ErrorPage404();
            }
        }

        static function ErrorPage404()
        {
            $controller_name = 'Controller_404';
            $action_name = 'action_' . '404';
            $controller_file = strtolower($controller_name) . '.php';
            $controller_path = 'application/controllers/' . $controller_file;
            include 'application/controllers/' . $controller_file;
            $controller = new $controller_name;
            $action = $action_name;
            $controller->$action();
        }
    }

?>