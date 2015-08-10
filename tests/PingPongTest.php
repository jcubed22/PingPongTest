<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_pingPong_number()
        {
            //Arrange
            $test_PingPong = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPong->pingPong($input);

            //Assert
            $this->assertEquals([$input], $result);
        }

        function test_pingPong_three()
        {
            //Arrange
            $test_PingPong = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPong->pingPong($input);

            //Assert
            $this->assertEquals([1,2,"ping"], $result);
        }

        function test_pingPong_five()
        {
            //Arrange
            $test_PingPong = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPong->pingPong($input);

            //Assert
            $this->assertEquals([1,2,"ping",4,"pong"], $result);
        }

        function test_pingPong_fifteen()
        {
            //Arrange
            $test_PingPong = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPong->pingPong($input);

            //Assert
            $this->assertEquals([1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong"], $result);
        }

        function test_pingPong_count()
        {
            //Arrange
            $test_PingPong = new PingPongGenerator;
            $input = 18;

            //Act
            $result = $test_PingPong->pingPong($input);

            //Assert
            $this->assertEquals([1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong",16,17,"ping"], $result);
        }

    }
?>
