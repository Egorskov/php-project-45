<?php

namespace BrainGames\Games\Calc;

use Error;
use mysql_xdevapi\Exception;
use function BrainGames\Engine\communication;

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
    communication($answers, $game);
}
function calculate(int $num1, int $num2, string $operation): int
{
    $result = 0;
    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return $result;
}
