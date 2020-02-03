<?php
    function fibonacci($n)
    {
        if ($n < 2) {
            if ($n < 0) {
                return null;
            }

            return $n;
        }

        return fibonacci($n - 1) + fibonacci($n - 2);
    }

    echo fibonacci(19)."\n";
