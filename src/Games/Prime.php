<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\arrayNumbers;
use function BrainGames\Engine\communication;

function runPrime(): void
{
    $game = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $answers = [];
    foreach (arrayNumbers() as $number) {
        if (isPrime($number)) {
            $answers[$number] = 'yes';
        } else {
            $answers[$number] = 'no';
        }
    }
    communication($answers, $game);
}

function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    } else {
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
    }
    return true;
}
