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
     * Set rectangle's width.
     * 
     * @param int $width rectangle's width
     * @return null
     */
    public function setWidth($width);

    /**
     * Get rectangle's width.
     * 
     * @return int rectangle's width
     */
    public function getWidth();

    /**
     * Set rectangle's height.
     * 
     * @param int $height rectangle's height
     * @return null
     */
    public function setHeight($height);

    /**
     * Get rectangle's height
     * 
     * @return int rectangle's height
     */
    public function getHeight();
}