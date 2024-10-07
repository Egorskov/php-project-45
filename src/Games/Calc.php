<?php

namespace BrainGames\Cli;

function calc()
{
    $game = 'What is the result of the expression?';
    $answers = [];
    $signs = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $first = mt_rand(1, 10);
        $second = mt_rand(1, 10);
        $operator = $signs[array_rand($signs)];
        $answers["$first $operator $second"] = calculate($first, $second, $operator);
    }
    communication($answers, $game);
}
function calculate($first, $second, $operator)
{
    switch ($operator) {
        case '+':
            return $first + $second;
        case '-':
            return $first - $second;
        case '*':
            return $first * $second;
    }
}
