<?php

    class Navigation_List
    {
        static function getAdditionalList()
        {
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            
            $pdo->query("SET CHARACTER SET 'utf8'");
            $result = $pdo->query("SELECT 
                `Title`, `TitleURL`
                FROM `additional_services_list`;");
            
            return $result;
            // $result= $result->fetchAll();
            // echo json_encode($result);
        }
        static function getProblemsList()
        {
            $pdo = null;
            require __DIR__ . '/../core/std_incl.php';
            
            $pdo->query("SET CHARACTER SET 'utf8'");
            $result = $pdo->query("SELECT 
                `Title`, `TitleURL`
                FROM `resolvable_problems_list`;");
            
            return $result;
            // $result= $result->fetchAll();
            // echo json_encode($result);
        }
    }

?>