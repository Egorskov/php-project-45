<?php

namespace BrainGames\Cli;

function gsd()
{
    $game = 'Find the greatest common divisor of given numbers.';
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $first = mt_rand(1, 100);
        $second = mt_rand(1, 100);
        $answers["$first $second"] = gmp_gcd($first, $second);
    }
    communication($answers, $game);
}

