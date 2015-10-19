<?php
/**
 * Scaling calculator file.
 * 
 * @author UshioShugo<ushio.s@gmail.com>
 */

namespace Ushios\Shape\Calculator;

use Ushios\Shape\RectangleInterface;
use Ushios\Shape\Rectangle;

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

    }
}