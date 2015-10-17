<?php
/**
 * Scaling calculator file.
 *
 * @author UshioShugo<ushio.s@gmail.com>
 */
namespace Ushios\Shape\Calculator;

use Ushios\Shape\Rectangle;
use Ushios\Shape\RectangleInterface;

/**
 * Scaling implements.
 *
 * @author UshioShugo<ushio.s@gmail.com>
 */
class Scale
{
    public static function fill(RectangleInterface $base, RectangleInterface $target)
    {
        $baseWidth = $base->getWidth();
        $baseHeight = $base->getHeight();
        $targetWidth = $target->getWidth();
        $targetHeight = $target->getHeight();

        $widthRatio = $baseWidth / $targetWidth;
        $heightRatio = $baseHeight / $targetHeight;

        $newWidth = null;
        $newHeight = null;

        if ($widthRatio > $heightRatio) {
            $newWidth = $targetWidth * $widthRatio;
            $newHeight = $targetHeight * $widthRatio;
        } else {
            $newWidth = $targetWidth * $heightRatio;
            $newHeight = $targetHeight * $heightRatio;
        }

        return new Rectangle($newWidth, $newHeight);
    }
}
