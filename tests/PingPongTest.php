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
            $this->assertEquals(7, $input);
        }
        //second test: user puts a number in, and gets back that number counted up from 1.
        function test_makePingPong_countUp()
        {
            //arange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            //act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals(array(1,2,3,4), $result);
        }
    }

?>
