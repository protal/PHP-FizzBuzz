<?php

use PHPUnit\Framework\TestCase;
require_once('fizzBuzz.php');

class FizzBuzzTest extends TestCase{
    public function testInput1MustBeReturn1()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("1",$fizzBuzz->say(1));
    }
    public function testInput2MustBeReturn2()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("2",$fizzBuzz->say(2));
    }
}

?>