<?php

$arrayIntroductory = 
[
    ["Hello", "world"],
    ["Brad", "came", "to", "dinner", "with", "us"],
    ["He", "loves", "tacos"]
];
$arrayFormat = ["LEFT", "RIGHT", "LEFT"];
$stringLimit = 16;
$arraySample = [];

function Introductory($arrayIntroductory)
{
    echo 'Input values: <br>';
    echo '<pre>';
    print_r($arrayIntroductory);
    echo '</pre>';
}

function main($arrayIntroductory, $stringLimit, $arrayFormat, $arraySample)
{
    $arraySample[] = "******************";
    for ($row = 0; $row < 3; $row++) 
    {
        $String = "";                                                
        $wordsSize = 0;                                               
        $arraySize = count($arrayIntroductory[$row]);                      
        for ($column = 0; $column < $arraySize; $column++) 
        {
            $wordsSize += strlen($arrayIntroductory[$row][$column]);
            $String = $String . $arrayIntroductory[$row][$column] . ' ';
        };
        $String = rtrim($String);
        $wordsSize += $arraySize - 1;
        if ($wordsSize <= $stringLimit) 
        {                             
            if ($arrayFormat[$row] == "LEFT") 
            {
                $String = str_pad($String, $stringLimit, " ", STR_PAD_RIGHT);
                $arraySample[] = "*" . $String . "*";
            } elseif ($arrayFormat[$row] == "RIGHT") {
                $String = str_pad($String, $stringLimit, " ", STR_PAD_LEFT);
                $arraySample[] = "*" . $String . "*";
            }
        } 
            else 
            {
            $String = "";
            $currentWord = 0;
            $wordsSizeLimit = 0;
            while ($currentWord < $arraySize) 
            {
                $String = "";
                $wordsSizeLimit = 0;
                while ($wordsSizeLimit + strlen($arrayIntroductory[$row][$currentWord]) + 1 < $stringLimit) 
                {
                    $wordsSizeLimit += strlen($arrayIntroductory[$row][$currentWord]) + 1;
                    $String = $String . $arrayIntroductory[$row][$currentWord] . ' ';
                    $currentWord++;
                };
                $wordsSizeLimit--;
                $String = rtrim($String);
                if ($arrayFormat[$row] == "LEFT") 
                {                     
                    $String = str_pad($String, $stringLimit, " ", STR_PAD_RIGHT);
                    $arraySample[] = "*" . $String . "*";
                } 
                    elseif ($arrayFormat[$row] == "RIGHT") 
                    {
                    $String = str_pad($String, $stringLimit, " ", STR_PAD_LEFT);
                    $arraySample[] = "*" . $String . "*";
                    }
            }
        }
    }
    $arraySample[] = "******************";
    return $arraySample;
}

function Sample($arraySample)
{
    echo 'Result: <br>';
    echo '<pre>';
    print_r($arraySample);
    echo '</pre>';
}

Introductory($arrayIntroductory, $stringLimit, $arrayFormat);
$arraySample = main($arrayIntroductory, $stringLimit, $arrayFormat, $arraySample);
Sample($arraySample);
