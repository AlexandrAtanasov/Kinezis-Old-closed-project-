<?php

    class Model_Vacancy extends Model
    {
        public function get_data()
        {
            require_once __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                Title, Article 
            FROM vacancy ORDER BY `id` DESC;");
            return $result;
        }
    }

?>