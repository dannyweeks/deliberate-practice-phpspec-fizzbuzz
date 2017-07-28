<?php

namespace FizzBuzz;

class Calculator
{
    public function run($start, $end)
    {
        return array_map(function ($value) {
            $overrideString = null;

            if ($this->isDivisibleBy3($value)) {
                $overrideString .= 'Fizz';
            }

            if ($this->isDivisibleBy5($value)) {
                $overrideString .= 'Buzz';
            }

            return $overrideString ?: $value;
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
