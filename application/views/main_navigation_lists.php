<?php
    $additionalList = null;
    $problemsList = null;
    include __DIR__ . '/../models/model_nav_lists.php';
    $additionalList = Navigation_List::getAdditionalList();
    $problemsList = Navigation_List::getProblemsList();
?>