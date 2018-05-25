<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function gameStart($gameHeader, $promts) {

    line('Welcome to Brain Games!');
    line($gameHeader);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $result = gameLoop($promts);
    if (is_array($result)) {
        line("'" . $result[1] . "' is wrong answer ;(. Correct answer was '" . $result[0] . "'.");
        line("Let's try again, %s!", $name);
    } else {
        line("Congritulations,%s!", $name);
    }
}

function gameLoop($promts) 
{
$counter = 0;

while ($counter < $promts) {
    $secretNum = rand(1, 100);
    $userAnswer = userAnswer($secretNum);
    $rightAnswer = (isEven($secretNum)) ? 'yes' : 'no';

    if (!checkEquals($rightAnswer, $userAnswer)) {          
            return [$rightAnswer, $userAnswer];
    }
        $counter++;
    }
}

function userAnswer($num)
{
    line('Question ' . $num);
    return prompt('Your answer');
}

function checkEquals($string1, $string2)
{
    return ($string1 == $string2);
}

function isEven($num)
{
    return ($num % 2 == 0);
}
