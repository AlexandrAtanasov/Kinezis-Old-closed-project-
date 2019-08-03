<?php

    class Model_Methodology extends Model
    {
        public function get_data()
        {
            $pdo = null;
            $result = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                `Title`, `SubTitle`, `Article`, `Img` 
            FROM `methodology_articles`;");
            return $result;
        }
    }

?>