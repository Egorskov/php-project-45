<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\communicate;

use const BrainGames\Engine\ROUND;
use const BrainGames\Engine\MIN_NUM;
use const BrainGames\Engine\MAX_NUM;

function runGcd(): void
{
    $game = 'Find the greatest common divisor of given numbers.';
    $answers = [];
    for ($i = 1; $i <= ROUND; $i++) {
        $first = mt_rand(MIN_NUM, MAX_NUM);
        $second = mt_rand(MIN_NUM, MAX_NUM);
        $answers["$first $second"] = getNod($first, $second);
    }
    communicate($answers, $game);
}

function getNod(int $x, int $y): string
{
    while ($x !== 0 && $y !== 0) {
        if ($x >= $y) {
            $x = $x % $y;
        } else {
            $y = $y % $x;
        }
    }
    return $x + $y;
}
