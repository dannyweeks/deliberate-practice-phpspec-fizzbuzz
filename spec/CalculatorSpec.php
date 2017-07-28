<?php

namespace spec\FizzBuzz;

use FizzBuzz\Calculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_returns_a_result_set_equal_to_the_requested_range()
    {
        $this->run(1, 10)->shouldHaveCount(10);
    }

    function it_should_return_return_fizz_if_the_number_is_divisible_by_3()
    {
        $this->run(1, 3)->shouldReturn([1,2,'Fizz']);
    }

    function it_should_return_return_buzz_if_the_number_is_divisible_by_5()
    {
        $this->run(4, 5)->shouldReturn([4, 'Buzz']);
    }

    function it_should_return_return_fizzbuzz_if_the_number_is_divisible_by_3_and_5()
    {
        $this->run(15, 15)->shouldReturn(['FizzBuzz']);
    }
}
