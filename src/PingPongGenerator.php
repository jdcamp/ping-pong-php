<?php
    class PingPongGenerator {
        private $countTo;

        function generatePingPongArray($number) {
            $outputArray = array();
            for ($i=1; $i <= $number; $i++) {
                if ($i % 3 == 0 && $i % 5 != 0) {
                    array_push($outputArray, "ping");
                } elseif ($i % 5 == 0) {
                    if ($i % 3 == 0) {
                        array_push($outputArray, "ping-pong");
                    }else {
                        array_push($outputArray, "pong");
                    }
                } else {
                    array_push($outputArray, $i);
                }

            }
            return implode(" ", $outputArray);
        }


    }
 ?>
