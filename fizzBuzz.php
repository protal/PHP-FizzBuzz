<?php

class FizzBuzz{
    public function say($num)
    {
        $resul = "";
        if($num == 3){
            $resul = "Fizz";
        }else{
            $resul = $num;
        }
        return $resul;
    }   

}

?>