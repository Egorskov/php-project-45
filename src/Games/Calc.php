<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\communicate;

use const BrainGames\Engine\ROUND;
use const BrainGames\Engine\MIN_NUM;
use const BrainGames\Engine\MAX_NUM;

function runCalc(): void
{
    $game = 'What is the result of the expression?';
    $answers = [];
    $signs = ['+', '-', '*'];
    for ($i = 1; $i <= ROUND; $i++) {
        $first = mt_rand(MIN_NUM, MAX_NUM);
        $second = mt_rand(MIN_NUM, MAX_NUM);
        $operator = $signs[array_rand($signs)];
        $answers["$first $operator $second"] = calculate($first, $second, $operator);
    }
    communicate($answers, $game);
}
function calculate(int $first, int $second, string $operator): string
{
    switch ($operator) {
        case '+':
            return (string) ($first + $second);
        case '-':
            return (string) ($first - $second);
        case '*':
            return (string) ($first * $second);
        default:
            break;
    }
}
