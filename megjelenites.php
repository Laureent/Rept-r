<?php
    include('data.php');
    date_default_timezone_set("Europe/Budapest");

    class Megjelenites extends Lekredezes {

        public $time;

        public function __construct()
        {
            parent::__construct();
            $this->time = date("h:i");
        }
        function induloKiir(){
            echo "<table>";
            foreach ($this->json_data['data'] as $value => $item){
                if ($item['deprature']['airport'] /*=="válaszott reptér"*/){
                    echo substr($item['departure']['scheduled'],strpos($item['departure']['scheduled'],'T') + 1,5)."<br>";
                }
            }
            echo "</table>";
        }
        function erkezoKiir(){
            echo "<table>";
            foreach ($this->json_data['data'] as $value => $item){
                if ($item['arrival']['airport'] /*=="válaszott reptér"*/){
                    echo substr($item['arrival']['scheduled'],strpos($item['arrival']['scheduled'],'T') + 1,5)."<br>";
                }
            }
            echo "</table>";
        }
    }
    $asd = new Megjelenites();
    $asd->induloKiir();

