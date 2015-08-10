<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        //First test: take input value from user and display value(s)
        function test_makePingPong_oneValue()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 7;

            //act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(7, $result);
        }
    }

?>
