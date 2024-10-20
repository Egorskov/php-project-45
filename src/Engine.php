<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\greeting;
use function cli\line;
use function cli\prompt;

const ROUND = 3;
const MIN_NUM = 1;
const MAX_NUM = 100;

function communication(array $answers, string $game): void
{
    $name = greeting();
    line("$game");
    foreach ($answers as $key => $value) {
        $answer = prompt("Question: $key\nYou answer");
        if ($answer !== $value) {
            line("'$answer' is wrong answer ;( Correct answer: '$value') \nLet's try again, $name!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, $name!");
}

function arrayNumbers(): array
{
    $numbers = [];
    for ($i = 1; $i <= ROUND; $i++) {
        $numbers[$i] = mt_rand(MIN_NUM, MAX_NUM);
    }
    return $numbers;
}
