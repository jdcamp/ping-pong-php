<?php
require_once "src/PingPongGenerator.php";

class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
{
    function test_checkPingPong_false()
    {
        $test_CheckPingPong = new PingPongGenerator;
        $input = 4;

        $result = $test_CheckPingPong->generatePingPongArray($input);

        $this->assertEquals("1 2 3 4", $result);
    }
}


?>
