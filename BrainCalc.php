<?php
namespace BrainGames\Games\BrainCalc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Cli\gameStart;

function run($game)
{
$gameHeader = 'What is the result of the expression?';
$promts = 3;    

gameStart($gameHeader, $promts);
}
