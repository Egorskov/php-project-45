<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\communication;
use function BrainGames\Engine\arrayNumbers;

function runEven(): void
{
    $game = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answers = [];
    foreach (arrayNumbers() as $number) {
        if (isEven($number)) {
            $answers[$number] = 'yes';
        } else {
            $answers[$number] = 'no';
        }
    }
    communication($answers, $game);
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
