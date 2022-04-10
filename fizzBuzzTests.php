<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "fizzBuzz.php";
class FizzBuzzTests extends TestCase
{
    private $fizzBuzz;
 
    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz(1,10);
    }
 
    protected function tearDown(): void
    {
        $this->fizzBuzz = NULL;
    }
 
    public function testFizzBuzz(): void
    {
        $result = $this->fizzBuzz->print_numbers();
        $this->assertEquals(array(1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz'), $result);
        #$this -> assertEquals(1,3);
    }
 
}


?>
