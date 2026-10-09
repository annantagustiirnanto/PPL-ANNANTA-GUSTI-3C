<?php
//File: ValidatorTest.php
use PHPUnit\Framework\TestCase;

require_once "validator.php";

class ValidatorTest extends TestCase{
    public function testValidAge(){
        $this->assertTrue(validateAge(30));
        $this->assertTrue(validateAge(-30));
    }
    public function testEmptyAgeThrowsException(){
        $this->exspectException(InvalidArgumentException::class);
        validateAge("");
    }
}