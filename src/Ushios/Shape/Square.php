<?php
namespace Ushios\Shape;

/**
 * Keep square infomations.
 * 
 * @author UshioShugo<ushio.s@gmail.com>
 */
class Square extends Rectangle
{
    /** @var int $theSide square's side */
    protected $theSide;

    /**
     * {@inheritdoc}
     */
    public function setWidth($width)
    {
        $this->theSide = $width;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->theSide;
    }

    /**
     * {@inheritdoc}
     */
    public function setHeight($height)
    {
        $this->theSide = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->theSide;
    }
}