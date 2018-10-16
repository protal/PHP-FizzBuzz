<?php

use PHPUnit\Framework\TestCase;
require_once('fizzBuzz.php');

class FizzBuzzTest extends TestCase{
    public function testInput1MustBeReturn1()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(1,$fizzBuzz->say(1));
    }
}

?>