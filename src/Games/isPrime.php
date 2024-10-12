<?php

namespace BrainGames\Cli;

function isPrime()
{
    $game = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $numbers[$i] = mt_rand(1, 100);
    }
    $answers = [];
    foreach ($numbers as $number) {
        $primeStatus = gmp_prob_prime($number);
        if ($primeStatus === 2 ) {
            $answers[$number] = 'yes';
        } else {
            $answers[$number] = 'no';
        }
    }
    communication($answers, $game);
}
