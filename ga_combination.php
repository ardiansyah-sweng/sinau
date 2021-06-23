<?php

class Combination
{
    function generateCombination()
    {
        $angka = [1, 2, 4, 5, 8, 9];
        foreach ($angka as $val) {
            $acak = $angka[array_rand($angka)];
            $result[] = [$val, $acak];
        }
        return $result;
    }

    function uniqueCheck()
    {
        $counter = 0;
        while ($counter < count($this->generateCombination()) * 2) {
            $combination = $this->generateCombination();
            foreach ($combination  as $val) {
                $sum[] = count(array_unique($val));
            }
            if (array_sum($sum) === count($combination) * 2) {
                return $combination;
            }
            $counter = 0;
            $sum = [];
        }
    }
}

$object = new Combination;
$data = $object->uniqueCheck();
print_r($data);