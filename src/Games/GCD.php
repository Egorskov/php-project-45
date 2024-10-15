<?php

namespace BrainGames\Games\GCD;

use function BrainGames\Engine\communication;

use const BrainGames\Engine\ROUND;
use const BrainGames\Engine\MIN_NUM;
use const BrainGames\Engine\MAX_NUM;

function gcd(): void
{
    $game = 'Find the greatest common divisor of given numbers.';
    $answers = [];
    for ($i = 0; $i < ROUND; $i++) {
        $first = mt_rand(MIN_NUM, MAX_NUM);
        $second = mt_rand(MIN_NUM, MAX_NUM);
        $answers["$first $second"] = nod($first, $second);
    }
    communication($answers, $game);
}

function nod($x, $y)
{
    while ($x != 0 && $y != 0) {
        if ($x >= $y) {
            $x = $x % $y;
        } else {
            $y = $y % $x;
        }
    }
    return $x + $y;
}
