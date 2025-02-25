<?php

class Solution
{
    public function romanToInt($s)
    {
        $roadMap = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        
        $n = strlen($s);
        $result = 0;

        for ($i = 0; $i < $n; $i++)
        {
            $currentValue  = $roadMap[$s[$i]];

            if($i < $n - 1 && $currentValue < $roadMap[$s[$i + 1]])
            {
                $result -= $currentValue;
            } else {
                $result += $currentValue;
            }
        }
        return $result;
    }
}


?>