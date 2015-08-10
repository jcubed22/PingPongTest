<?php

    class PingPongGenerator
    {
        function pingPong($input_number)
        {
            $i = 1;
            $pingPongArray = array();
            while($i <= $input_number) {

                if ($i % 3 == 0 && $i % 5 == 0) {
                    array_push($pingPongArray, "ping-pong");
                } elseif ($i % 5 == 0) {
                    array_push($pingPongArray, "pong");
                } elseif ($i % 3 == 0) {
                    array_push($pingPongArray, "ping");
                } else {
                    array_push($pingPongArray, $i);
                }
                $i++;
            }
            return $pingPongArray;

        }
    }
?>
