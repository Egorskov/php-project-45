<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;


function isEven()
{
    $name = greeting();
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $numbers[$i] = mt_rand(0, 100);
    }
    line('Answer "yes" if the number is even, otherwise answer "no".');
    foreach ($numbers as $number) {
        line("Question: $number");
        if ($number % 2 === 0) {
            $corrAnswer = 'yes';
        } else {
            $corrAnswer = 'no';
        }
        $answer = prompt("Your answer: ");
        if ($answer === $corrAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;( Correct answer: '{$corrAnswer}') \nLet's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
