<?php

namespace FizzBuzz;

class Calculator
{
    public function run($start, $end)
    {
        return array_map(function ($value) {
            if ($this->isDivisibleBy3($value) && $this->isDivisibleBy5($value)) {
                return 'FizzBuzz';
            }

            if ($this->isDivisibleBy3($value)) {
                return 'Fizz';
            }

            if ($this->isDivisibleBy5($value)) {
                return 'Buzz';
            }

            return $value;
        }, range($start, $end));
    }

    /**
     * @param $value
     *
     * @return boolean
     */
    private function isDivisibleBy3($value)
    {
        return $value % 3 === 0;
    }

    /**
     * @param $value
     *
     * @return boolean
     */
    private function isDivisibleBy5($value)
    {
        return $value % 5 === 0;
    }
}
