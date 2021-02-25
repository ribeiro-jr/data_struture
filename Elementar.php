<?php

class Elementar
{

    function divide($a, $b)
    {
        if ($a == 0)
            return false;

        return $a / $b;
    }

    public function sum(array $nums)
    {
        if (!is_array($nums))
            return false;
        return array_sum($nums);
    }

    public function subtraction(array $nums)
    {
        if (!is_array($nums))
            return false;
        $result = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            $result -= $nums[$i];
        }

        return $result;
    }

    public function multiply(array $nums)
    {
        if (!is_array($nums))
            return false;
        return array_product($nums);
    }
}
