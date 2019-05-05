<?php

    class Model_Sales extends Model
    {
        public function get_data()
        {
            require_once __DIR__ . '/../core/std_incl.php';
        
            $pdo->query("SET CHARACTER SET 'utf8'");
            $result = $pdo->query("SELECT 
                `name`, `bonus` 
                FROM cost_abonement_sale;");
            return $result;
        }
    }

?>