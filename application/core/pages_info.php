<?php
   include(__DIR__ . '/../models/model_pages_info.php');
   $PageInfo = Pages_Info::getInfo();
   return $PageInfo;
?>