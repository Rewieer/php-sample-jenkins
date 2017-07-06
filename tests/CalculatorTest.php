<?php
use Sample\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase {
  public function testAdd(){
    $this->assertEquals(3, Calculator::add(1, 2));
  }
}
