<?php

    class Model_Main extends Model
    {
        public function get_data()
        {
            // $result = null;
            $pdo = null;
            require_once __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");

            $result = $pdo->query("SELECT
                FirstName, LastName, Position, About, Img
                FROM staff_main_page;");
            return $result;
        }
        public function get_data2()
        {
            // $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result2 = $pdo->query("SELECT
                `Title`, `Article`, `Img` 
                FROM `main_page_advantages`;");
            return $result2;
        }
    }

?>