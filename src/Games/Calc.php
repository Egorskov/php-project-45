<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\communication;

use const BrainGames\Engine\ROUND;
use const BrainGames\Engine\MIN_NUM;
use const BrainGames\Engine\MAX_NUM;

function calc(): void
{
    $game = 'What is the result of the expression?';
    $answers = [];
    $signs = ['+', '-', '*'];
    for ($i = 0; $i < ROUND; $i++) {
        $first = mt_rand(MIN_NUM, MAX_NUM);
        $second = mt_rand(MIN_NUM, MAX_NUM);
        $operator = $signs[array_rand($signs)];
        $answers["$first $operator $second"] = calculate($first, $second, $operator);
    }
    communication($answers, $game);
}
function calculate(int $num1, int $num2, string $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
    }
}
