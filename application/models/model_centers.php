<?php

    class Model_Centers extends Model
    {
        public function get_data()
        {
            $pdo = null;
            $result = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                `Title`, `Article`, `Img` 
            FROM `about_centers`;");
            return $result;
        }
    }

?>