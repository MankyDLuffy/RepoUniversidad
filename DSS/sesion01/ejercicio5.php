<?php

    function proximoMes()
    {
        $fecha = date_create();
        $fecha->add(new DateInterval('P1M'));
        echo date_format($fecha, 'd/m/Y')."\n";
    }
    echo proximoMes();
