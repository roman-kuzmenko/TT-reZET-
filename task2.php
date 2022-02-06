<?php

$arrayIntroductory =
    [
        [1, 2, 3, 2, 7],
        [4, 5, 6, 8, 1],
        [7, 8, 9, 4, 5],
    ];

$arraySample = [];

function content($arrayIntroductory, $arraySize)
{          
    if ($arraySize < 3) 
    {
        exit('ERROR!<br>The number of columns must be at least 3.');
    } 
    else
        echo 'Input values: <br>';
        echo '<pre>';
        print_r($arrayIntroductory);
        echo '</pre><br>';
}

function Sample($arrayIntroductory, $arraySample, $arraySize)
{    
    $column = 0;
    for ($k = 0; $k <= $arraySize - 3; $k++) 
    {
        for ($x = 0; $x < 3; $x++) 
        {
            for ($y = $column; $y <= $column + 2; $y++) 
            {
                $arraySample[] = $arrayIntroductory[$x][$y];
            }
        }
        $m = 1;
        while ($m <= 9) 
        {                                  
            if (in_array($m, $arraySample)) 
            {
                $exist = true;
            } 
            else 
            {
                $exist = false;
                break;
            };
            $m++;
        };
        $arrayResult[] = $exist;
        unset($arraySample);
        $column++;
    }
    return $arrayResult;
}

function resultOutput($arrayResult)
{
    echo 'Result: <br>';
    echo '<pre>';
    print_r($arrayResult);
    echo '</pre>';
}

$arraySize = count($arrayIntroductory[0]);
content($arrayIntroductory, $arraySize);

$arrayResult = Sample($arrayIntroductory, $arraySample, $arraySize);
resultOutput($arrayResult);
