<?php

    class Model_Portfolio extends Model
    {
        public function get_data()
        {
            return array(
                array(
                    'Year' => '2019',
                    'Site' => 'http://yandex.ru',
                    'Description' => 'Some description one'
                ),
                array (
                    'Year' => '2018',
                    'Site' => 'http://google.com',
                    'Description' => 'Some description two'
                ),
            );
        }
    }

?>