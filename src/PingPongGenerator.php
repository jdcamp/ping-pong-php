<?php
    class PingPongGenerator {
        private $countTo;

        function generatePingPongArray($number) {
            $outputArray = array();
            for ($i=1; $i <= $number; $i++) {
                array_push($outputArray, $i);
            }
            return implode(" ", $outputArray);
        }


    }
 ?>
