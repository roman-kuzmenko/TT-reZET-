<?php

    $arrayIntroductory = [1, 3, 5, 4, 5, 7];
    
    function content ($arrayIntroductory) 
    {
        $arraySize = count ($arrayIntroductory);
        if ($arraySize < 3) 
        {
            exit ('ERROR!<br>The array must contain at least 3 numbers.');          
        }
        else 
            echo '<pre>';
            echo 'Input values:<br>';
            print_r ($arrayIntroductory);
            echo '</pre><br>';
    }
    
    function comparison ($arrayIntroductory) 
    {
        $arraySize = count ($arrayIntroductory);
        for ($i = 1; $i < $arraySize - 1; $i++) 
        {
            if (($arrayIntroductory[$i-1] < $arrayIntroductory[$i] && $arrayIntroductory[$i] > $arrayIntroductory[$i+1])
                or ($arrayIntroductory[$i-1] > $arrayIntroductory[$i] && $arrayIntroductory[$i] < $arrayIntroductory[$i+1]))
                {
                    $arrayResult[$i-1] = 1;
                }
                else
                {
                    $arrayResult[$i-1] = 0;
                }
        }
        return $arrayResult;
    }

    function resultOutput ($arrayResult) 
    {
        echo '<pre>';
        echo 'Result of checking:<br>';
        print_r ($arrayResult);
        echo '</pre>';
    }

    content ($arrayIntroductory);
    $arrayResult = comparison ($arrayIntroductory);
    resultOutput ($arrayResult);
