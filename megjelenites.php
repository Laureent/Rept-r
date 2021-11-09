<?php
    include('data.php');
    date_default_timezone_set("Europe/Budapest");

    class InduloMegjelenites extends Lekredezes {

        public $time;

        public function __construct()
        {
            parent::__construct();
            $this->time = date("h:i");
        }
        function induloKiir(){
            echo $this->induloIdo;
        }
    }
    $asd = new InduloMegjelenites();
    $asd->induloKiir();
