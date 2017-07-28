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

    public function stage2($start, $end)
    {
        return array_map(function ($value) {
            if ($this->contains($value, 3)){
                return 'Fizz';
            }

            if ($this->contains($value, 5)){
                return 'Buzz';
            }

            return $value;
        }, $this->run($start, $end));
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

    /**
     * @param $haystack
     * @param $needle
     *
     * @return boolean
     */
    private function contains($haystack, $needle)
    {
        return preg_match("/" . $needle . "/", $haystack);
    }
}
