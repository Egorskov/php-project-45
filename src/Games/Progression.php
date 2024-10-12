<?php

namespace BrainGames\Cli;

function progression()
{
    $game = 'What number is missing in the progression?';
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $numbers = [];
        $numbers[] = 0;
        $stepper = mt_rand(1, 10);
        for ($j = 1; $j < 100; $j++) {
            $numbers[$j] = $numbers[$j - 1] + $stepper;
        }
        $start = mt_rand(1, 90);
        $lens = mt_rand(5, 10);
        $numbers = array_slice($numbers, $start, $lens);
        $randomSym = mt_rand(0, ($lens - 1));
        $correctAnswer = $numbers[$randomSym];
        $numbers[$randomSym] = '..';
        $numbersString = implode(' ', $numbers);
        $answers[$numbersString] = "$correctAnswer";
    }
    communication($answers, $game);
}
