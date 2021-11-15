<?php
    /*
     * Lekérdezés osztály, repülési adatok lekérdezése és eltárolása egy asszociatív tömbbe*
     * */
    class Lekredezes{
        private $response;
        public $json_data;

        public function __construct()
        {
            $this->response = file_get_contents('http://api.aviationstack.com/v1/flights?access_key=5a35681b31d2d4cc92a3628794ebe890');
            $this->json_data = json_decode($this->response,true);
        }
    }
    ?>




