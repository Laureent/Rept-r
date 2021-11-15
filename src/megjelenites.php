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
            echo "<tr><th>Hova</th><th>Indulás</th><th>Terminál</th><th>Kapu</th><th>Késés</th></tr>";
            foreach ($this->json_data['data'] as $value => $item){
                if ($item['departure']['airport'] == "Seoul (Incheon)"){
                    echo "<tr><br>";
                    echo "<td>".$item['arrival']['airport']."</td>";
                    echo "<td>".substr($item['departure']['scheduled'],strpos($item['departure']['scheduled'],'T') + 1,5)."</td>";
                    echo "<td>".$item['departure']['terminal']."</td>";
                    echo "<td>".$item['departure']['gate']."</td>";
                    if ($item['departure']['delay'] == null){
                        echo "<td> - </td>";
                    }else{
                        echo "<td>".$item['departure']['delay']."</td>";
                    }
                    echo "</tr><br>";
                }
            }
            echo "</table>";
        }

        function erkezoKiir(){
            echo "<table>";
            echo "<tr><th>Honnan</th><th>Érkezés</th><th>Terminál</th><th>Kapu</th><th>Késés</th></tr>";
            foreach ($this->json_data['data'] as $value => $item){
                if ($item['arrival']['airport'] == "Seoul (Incheon)"){
                    echo "<tr><br>";
                    echo "<td>".$item['departure']['airport']."</td>";
                    echo "<td>".substr($item['arrival']['scheduled'],strpos($item['arrival']['scheduled'],'T') + 1,5)."</td>";
                    echo "<td>".$item['arrival']['terminal']."</td>";
                    echo "<td>".$item['arrival']['gate']."</td>";
                    if ($item['arrival']['delay'] == null){
                        echo "<td> - </td>";
                    }else{
                        echo "<td>".$item['arrival']['delay']."</td>";
                    }
                    echo "</tr><br>";
                }
            }
            echo "</table>";
        }
    }
