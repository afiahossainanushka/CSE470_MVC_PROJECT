<?php
use PHPUnit\Framework\TestCase;
class SampleTest extends TestCase
{
    public function testTrueAssertsToTrue(){
        $this->assertTrue(true);
    }

    public function testMultiplication(){

    	$n = 2;
    	$m = 3;
    	$p = 2*3;


        $this->assertEquals($p,6);
    }
}