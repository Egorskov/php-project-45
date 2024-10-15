<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\arrayNumbers;
use function BrainGames\Engine\communication;

function prime(): void
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

function isPrime($num): bool
{
    if ($num <= 2){
        return false;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
    }
    return true;
}