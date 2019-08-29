<?php

    class Model_Download_data extends Model
    {
        public function get_data()
        {
            $handle = file_get_contents(__DIR__ . "/../../download/sitemap.xml");
            if ($handle) 
            {
                echo $handle;
            };
        }
    }

?>