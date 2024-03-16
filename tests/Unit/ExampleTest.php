<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    public function test_if_somatory_is_correct(): void 
    {
        $this->assertEquals($this->calculate_two_number(5,5), 5+5); 
    }

    public function test_if_number_is_pair(): void
    {
        $this->assertFalse($this->return_true_if_number_is_pair(11));
    }

    public function test_that_arrays_contain_email(): void 
    {
        $faculdades = ["USP","Unicamp","UFPR","ITA","UTFPR"];
        $this->assertContains("UTFPR", $faculdades);
    }

    public function calculate_two_number($number1, $number2): int
    {
        $result = $number1 + $number2;
        return $result;
    }

    public function return_true_if_number_is_pair($number): bool
    {
        $isPair = $number%2;
        if($isPair === 1) {
            return false;
        }
        return true;
    }
}

