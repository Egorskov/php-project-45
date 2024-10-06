<?php

namespace BrainGames\Cli;

//use function cli\line;
//use function cli\prompt;
//use function BrainGames\Cli\communication;

function isEven()
{
    $game = 'Answer "yes" if the number is even, otherwise answer "no".';
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $numbers[$i] = mt_rand(1, 100);
    }
    $answers = [];
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $answers[$number] = 'yes';
        } else {
            $answers[$number] = 'no';
        }
    }
    communication($answers, $game);
}
