<?php

/**
 * Провяряем является ли передаваемое число простым.
 * @param $number
 * @return bool
 */
function checkPrimeNumber($number): bool
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}