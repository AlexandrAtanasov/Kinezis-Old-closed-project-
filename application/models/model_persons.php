<?php

    class Model_Persons extends Model
    {
        public function get_data()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';

            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result = $pdo->query("SELECT
                FirstName, LastName, Position, About, Img, Review
                FROM `staff_doctors`;");
            return $result;
        }
        
        public function get_data2()
        {
            // $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result2 = $pdo->query("SELECT
                FirstName, LastName, About, Img
                FROM `staff_senior_instructors`;");
            return $result2;
        }
        
        public function get_data3()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result3 = $pdo->query("SELECT
                FirstName, LastName, About, Img
                FROM `staff_instructors`;");
            return $result3;
        }

        public function get_data4()
        {
            $result = null;
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            $result4 = $pdo->query("SELECT
                FirstName, LastName, About, Img
                FROM `staff_administrators`;");
            return $result4;
        }
    }

?>