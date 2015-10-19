<?php
/**
 * Keep rectangle infomations file.
 *
 * @author UshioShugo<ushio.s@gmail.com>
 */

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
     * Constructor.
     *
     * Create new rectangle instance.
     * @param int $width rectangle's width
     * @param int $height rectangle's height
     * @return void
     */
    public function __construct($width = null, $height = null)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

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
