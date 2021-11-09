<?php

    class Lekredezes{
        private $response;
        public $json_data;

        public function __construct()
        {
            $this->response = file_get_contents('http://api.aviationstack.com/v1/flights?access_key=8cae8a035a9ad3134cccd425fd722798');
            $this->json_data = json_decode($this->response,true);
        }
    }
    ?>




