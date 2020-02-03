<?php
    function divide($num1, $num2)
    {
        if ($num2 === 0) {
            return null;
        }

        return $num1 / $num2."\n";
    }

    echo divide(15, 3);
