<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:34 PM
 */

namespace CursoSymfony;

require_once 'Punto.php';

class Circulo
{
    /**
     * @var Punto
     */
    private $origen;

    private $radio;

    public function __construct(Punto $origen, $radio)
    {
        $this->origen = $origen;
        $this->radio = $radio;
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
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function area()
    {
        return pow($this->getRadio() * M_PI, 2);
    }

    public function perimetro()
    {
        return 2 * M_PI * $this->getRadio();
    }

    public function __toString()
    {
        return '[Circulo (' . 'radio: ' . $this->getRadio() . ", origen: " . $this->getOrigen() . ')';
    }
}
