<?php

    class Model_News extends Model
    {
        public function get_data()
        {
            $pdo = null;
            $result = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                `Date`, `Header`, `Article`, `Img`, `Img2`, `Img3`
            FROM `news` ORDER BY `id` DESC;");
            return $result;
        }
    }

?>