<?php

    class Model_Person extends Model
    {
        public function get_data()
        {
            require_once __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                FirstName, LastName, Position, About, Img
                FROM staff;");
            return $result;
        }
    }

?>