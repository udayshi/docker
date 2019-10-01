<?php
namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 10);
        //print_r($_ENV);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(40, $result);




    }
    public function testList(){
        $this->assertEquals(0,1);
        
    }
    public function testList2(){
        $this->assertEquals(0,1);
    }
}