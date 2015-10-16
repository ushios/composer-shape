<?php
namespace Ushios\Shape;

/**
 * Rectangle Interface.
 * 
 * @author UshioShugo<ushio.s@gmail.com>
 */
interface RectangleInterface
{
    /**
     * Set shape object's width.
     * 
     * @param int $width shape object's width
     * @return null
     */
    public function setWidth($width);

    /**
     * Get shape object's width.
     * 
     * @return int shape object's width
     */
    public function getWidth();

    /**
     * Set shape object's height.
     * 
     * @param int $height shape object's height
     * @return null
     */
    public function setHeight($height);

    /**
     * Get shape object's height
     * 
     * @return int shape object's height
     */
    public function getHeight();
}
