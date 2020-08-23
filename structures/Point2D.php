<?php

namespace Bolt\structures;

/**
 * Class Point2D
 * Immutable
 *
 * Represents a single location in 2-dimensional space.
 *
 * @author Michal Stefanak
 * @link https://github.com/stefanak-michal/Bolt
 * @package Bolt\structures
 */
class Point2D
{
    /**
     * @var int
     */
    private $srid;

    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    /**
     * Point2D constructor.
     * @param int $srid
     * @param float $x
     * @param float $y
     */
    public function __construct(int $srid, float $x, float $y)
    {
        $this->srid = $srid;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Spatial Reference System Identifier
     * @return int
     */
    public function srid(): int
    {
        return $this->srid;
    }

    /**
     * @return float
     */
    public function x(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function y(): float
    {
        return $this->y;
    }

}
