<?php

    function if_else($arg, $arg_2){

        if (is_integer($arg) != true ){
            echo 'не целое число';
        }
        else{
            if($arg > 0){
                echo "<br>";
                echo 'больше 0';
            }
            elseif ($arg = 0){
                echo "<br>";
                echo 'равен 0';
            }
            else{
                echo "<br>";
                echo 'меньше 0';
            }
        }

        switch ($arg_2){
            case is_string($arg_2) == true:
                echo "<br>";
                echo 'string';
                break;
            case is_double($arg_2):
                echo "<br>";
                echo 'double';
                break;
        }
    }

    function get_sum($low, $high){
        $result = 0; // возвращаемое значение
        for($i = $low; $i < $high; $i++)
        {
            $result+= $i * $i;
        }
        return $result;
    }

    function operators($arg) {
        $result = (($arg + $arg)*12) / 5;
        $result_2 = (($arg + $arg)*12) % 5;
        echo "<br>";
        echo $result;
        echo "<br>";
        echo $result_2;
    }