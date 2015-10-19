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
    /**
     * Scale target rectangle fill of base rectangle.
     * 
     * ┏━━━━━━┓                           ┌───────┏━━━━━━┓───────┐
     * ┃ base ┃       ┌──────────┐        │ target┃ base ┃       │
     * ┃      ┃   &   │ target   │   =>   │       ┃      ┃       │
     * ┃      ┃       └──────────┘        │       ┃      ┃       │
     * ┗━━━━━━┛                           └───────┗━━━━━━┛───────┘
     * 
     * @param RectangleInterface $base Base rectangle.
     * @param RectangleInterface $target target rectangle.
     * @return Rectangle Scaled rectangle
     */
    public static function fillRectWithRect(RectangleInterface $base, RectangleInterface $target)
    {
        $baseWidth = $base->getWidth();
        $baseHeight = $base->getHeight();
        $targetWidth = $target->getWidth();
        $targetHeight = $target->getHeight();

        $widthRatio = $baseWidth / $targetWidth;
        $heightRatio = $baseHeight / $targetHeight;

        $newWidth = null;
        $newHeight = null;

        $newWidth = $targetWidth * $heightRatio;
        $newHeight = $targetHeight * $heightRatio;
        
        if (! ($newWidth >= $baseWidth && $newHeight >= $baseHeight) ) {
            $newWidth = $targetWidth * $widthRatio;
            $newHeight = $targetHeight * $widthRatio;
        }

        return new Rectangle($newWidth, $newHeight);
    }
}
