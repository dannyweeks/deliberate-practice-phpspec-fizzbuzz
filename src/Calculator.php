<?php

namespace FizzBuzz;

class Calculator
{
    /**
     * @param $start
     * @param $end
     *
     * @return array
     */
    public function run($start, $end)
    {
        return array_map(function ($value) {
            $overrideString = null;

            if ($this->isDivisibleBy($value, 3)) {
                $overrideString .= 'Fizz';
            }

            if ($this->isDivisibleBy($value, 5)) {
                $overrideString .= 'Buzz';
            }

            return $overrideString ?: $value;
        }, range($start, $end));
    }

    /**
     * @param $start
     * @param $end
     *
     * @return array
     */
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
    private function isDivisibleBy($value, $by)
    {
        return $value % $by === 0;
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
