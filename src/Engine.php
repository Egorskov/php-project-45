<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function communication(array $answers, $game)
{
    $name = greeting();
    foreach ($answers as $key => $value) {
        $answer = prompt("Question: $key\nYou answer: ");
        if ($answer !== $value) {
            line("'$answer' is wrong answer ;( Correct answer: '$value') \nLet's try again, $name!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, $name!");
}
