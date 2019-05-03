<?php

    class Model_Price extends Model
    {
        public function get_data()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT 
            `service`, `duration`, `cost` 
            FROM cost_services;");
            return $result;
        }
        
        public function get_data2()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result2 = $pdo->query("SELECT 
            `series`, `numb_classes`, `period`, `class_duration`, `cost_series` 
            FROM cost_abonement;");
            return $result2;
        }
        
        public function get_data3()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result3 = $pdo->query("SELECT 
            `series`, `numb_classes`, `period`, `class_duration`, `cost_series` 
            FROM cost_abonement_support;");
            return $result3;
        }
    }

?>