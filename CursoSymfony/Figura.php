<?php

namespace CursoSymfony;

require_once 'Punto.php';

abstract class Figura
{
    protected static $numFiguras = 0;

    /**
     * @var Punto
     */
    protected $origen;

    public function __construct(Punto $origen)
    {
        self::$numFiguras =+ self::$numFiguras;
        $this->origen = $origen;
    }

    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    /**
     * @return int
     */
    public static function getNumFiguras()
    {
        return self::$numFiguras;
    }



    public abstract function area();

    public abstract function perimetro();

/*
 * a comment
 */
}