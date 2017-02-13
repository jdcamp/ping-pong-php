<?php
    class PingPongGenerator {
        private $outputString;

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
            $this->outputString = $outputArray;
        }

        function save()
        {
            array_push($_SESSION['ping-pong-session'], $this->getOutputString());
        }

        function getOutputString() {
            return $this->outputString;
        }




    }
 ?>
