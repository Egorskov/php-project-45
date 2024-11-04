<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\communicate;
use function BrainGames\Engine\getArrayNumbers;

function runEven()
{
    $game = 'Answer "yes" if the number is even, otherwise answer "no".';
    $answers = [];
    foreach (getArrayNumbers() as $number) {
        if (isEven($number)) {
            $answers[] = [$number,'yes'];
        } else {
            $answers[] = [$number,'no'];
        }
    }
    communicate($answers, $game);
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
