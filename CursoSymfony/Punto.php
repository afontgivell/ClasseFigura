<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:57 PM
 */

namespace CursoSymfony;


class Punto
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function __toString()
    {
        return "[Punto (" . "x: " . $this->getX() . ", " . "y: " . $this->getY() . ")]";
    }

    public function distance(Punto $punto)
    {
        $difX = $this->getX() - $punto->getX();
        $difY = $this->getY() - $punto->getY();
        $sumPow = pow($difX, 2) + pow($difY, 2);
        return sqrt($sumPow);
    }
}