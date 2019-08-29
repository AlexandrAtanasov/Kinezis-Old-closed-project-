<?php

    class Controller_Download_data extends Controller
    {
        public function __construct()
        {
            $this -> model = new Model_Download_data();
        }

        public function action_sitemap_download()
        {
            $data = $this -> model -> get_data();
        } 
    }
?>