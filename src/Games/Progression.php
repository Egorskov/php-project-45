<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\communication;

use const BrainGames\Engine\ROUND;
use const BrainGames\Engine\MIN_NUM;
use const BrainGames\Engine\MAX_NUM;

function progression(): void
{
    $game = 'What number is missing in the progression?';
    $answers = [];
    for ($i = 0; $i < ROUND; $i++) {
        $numbers = slicer();
        $randomSym = mt_rand(0, (count($numbers) - 1));
        $correctAnswer = $numbers[$randomSym];
        $numbers[$randomSym] = '..';
        $numbersString = implode(' ', $numbers);
        $answers[$numbersString] = "$correctAnswer";
    }
    communication($answers, $game);
}
function slicer(): array
{
    $num = [];
    $num[] = 0;
    $stepper = mt_rand(1, 10);
    for ($j = MIN_NUM; $j < MAX_NUM; $j++) {
        $num[$j] = $num[$j - 1] + $stepper;
    }
    $start = mt_rand(MIN_NUM, (MAX_NUM - 10));
    $lens = mt_rand(5, 10);
    return array_slice($num, $start, $lens);
}
