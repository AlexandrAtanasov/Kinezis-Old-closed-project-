<?php

    class Model_Individual extends Model
    {
        public function get_data()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT 
            `series`, `numb_classes`, `class_duration`, `cost_series` 
            FROM `cost_individual`;");
            return $result;
        }
        public function get_data2()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result2 = $pdo->query("SELECT 
            `numb_classes`, `cost_series` 
            FROM `cost_individual_athome`;");
            return $result2;
        }
        public function get_data3()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result3 = $pdo->query("SELECT 
            `numb_classes`, `cost_series` 
            FROM `cost_individual_rehab`;");
            return $result3;
        }

    }

?>