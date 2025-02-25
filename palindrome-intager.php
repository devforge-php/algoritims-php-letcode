<?php


class Solution
{
    public function numbers($x)
    {
        if ($x < 0) {
            return false;
        }

        $strX = strval($x);
        $strrX = strrev(($strX));
        return $strX === $strrX;
    }
}
