<?php

// не красиво, переделать
require_once __DIR__ . '/../core/std_incl.php';

$pdo->query("SET CHARACTER SET 'utf8'");
$result = $pdo->query("SELECT 
    `id`, `Title`, `Class` 
    FROM `resolvable_problems_list`;");

$result= $result->fetchAll();
echo json_encode($result);

?>