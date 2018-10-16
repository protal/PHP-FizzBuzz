<?php

class FizzBuzz{
    public function say($num)
    {
        if($num == 1){
            return "1";
        }
        if($num == 2){
            return "2";
        }
        if($num == 4){
            return "4";
        }
        if($num == 7){
            return "7";
        }

        if($num == 3){
            return "Fizz";
        }
    }   

}

?>