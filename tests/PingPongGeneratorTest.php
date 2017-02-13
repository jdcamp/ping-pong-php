<?php
require_once "src/PingPongGenerator.php";

class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
{
    function test_checkPingPong_false()
    {
        $test_CheckPingPong = new PingPongGenerator;
        $input = 15;

        $result = $test_CheckPingPong->generatePingPongArray($input);

        $this->assertEquals("1 2 ping 4 pong ping 7 8 ping pong 11 ping 13 14 ping-pong", $result);
    }
}


?>
