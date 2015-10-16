<?php
namespace Ushios\Shape;

/**
 * Keep rectangle infomations.
 * 
 * @author UshioShugo<ushio.s@gmail.com>
 */
class Rectangle extends ShapeAbstract implements RectangleInterface
{
    /** @var int $width Rectangle's width */
    protected $width;

    /** @var int $height Rectangle's height */
    protected $height;
}