<?php

namespace dss\ejercicios;

class Fibonacci
{
    private $miArray = array();

    public function __construct($miArray)
    {
        $this->miArray = fibonacci($n);
    }

    public function imprimirSecuencia()
    {
        echo implode(', ', $this->miArray);
    }

    public function fibonacci($n)
    {
        if ($n < 2) {
            if ($n < 0) {
                return null;
            }

            return $this->miArray;
        }
        foreach ($this->miArray as $valor) {
            if ($valor = fibonacci($n - 1) + fibonacci($n - 2)) {
                fibonacci($n - 1) + fibonacci($n - 2);
            }
        }
        $this->miArray = fibonacci($n - 1) + fibonacci($n - 2);
    }
}
