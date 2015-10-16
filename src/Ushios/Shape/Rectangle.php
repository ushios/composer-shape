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

    /**
     * {@inheritdoc}
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * {@inheritdoc}
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->height;
    }
}