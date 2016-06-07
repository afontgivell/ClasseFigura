<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:05 PM
 */

namespace CursoSymfony;

include_once 'Punto.php';
include_once 'Circulo.php';
include_once 'Cuadrado.php';

class Index
{
    public static function pruebaEcho()
    {
        phpinfo();
    }

    public static function pruebaPunto()
    {
        //echo "<H1>HELLO WORLD</H1>";
        $puntoA = new Punto(2, 4);
        $puntoB = new Punto(5, 6);
        //var_dump($puntoA);
        //echo '<br>';
        //die;
        echo "diff between punto A y punto B: " . $puntoA->distance($puntoB);
    }

    public static function pruebaCirculo()
    {
        $punto = new Punto(2, 4);
        $circulo = new Circulo($punto, 4);
        echo 'perimetro: ' . $circulo->perimetro() . ', area: ' . $circulo->area();
    }
    
    public static function pruebaCuadrado()
    {
        $punto = new Punto(2, 4);
        $cuadrado = new Cuadrado($punto, 3);
        //var_dump($cuadrado);
        echo 'CUADRADO, perimetro: ' . $cuadrado->perimetro() . ', area: ' . $cuadrado->area();
    }
}

//Index::pruebaEcho();
//Index::pruebaPunto();
//Index::pruebaCirculo();
Index::pruebaCuadrado();


