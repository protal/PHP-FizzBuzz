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
    public function testInput3MustBeReturnFizz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz",$fizzBuzz->say(3));
    }
    public function testInput4MustBeReturn4()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("4",$fizzBuzz->say(4));
    }
    public function testInput7MustBeReturn7()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("7",$fizzBuzz->say(7));
    }
}

?>