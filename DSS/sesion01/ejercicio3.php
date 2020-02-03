<?php

function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

    $miArray = array(0, 1, 4, 3, 2);
    function ordenacionBurbuja($array)
    {
        $max = sizeof($array);
        for ($i = 0; $i < $max; ++$i) {
            for ($j = 0; $j < $max - 1; ++$j) {
                if ($array[$j] > $array[$j + 1]) {
                    swap($array[$j], $array[$j + 1]);
                }
            }
        }
        foreach ($array as $valor) {
            echo $valor."\n";
        }
    }
    echo ordenacionBurbuja($miArray);
