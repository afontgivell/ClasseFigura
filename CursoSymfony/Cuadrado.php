<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:47 PM
 */

namespace CursoSymfony;

require_once 'Punto.php';

class Cuadrado
{
    /**
     * @var Punto
     */
    private $origen;

    private $ancho;

    public function __construct(Punto $origen, $ancho)
    {
        $this->origen = $origen;
        $this->ancho = $ancho;
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
     * @return mixed
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * @param mixed $ancho
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    public function area()
    {
        return pow($this->getAncho(), 2);
    }

    public function perimetro()
    {
        return 4 * $this->ancho;
    }

    public function __toString()
    {
        return '[Cuadrado (' . 'ancho: ' . $this->getAncho() . ", origen: " . $this->getOrigen() . ')';
    }

}