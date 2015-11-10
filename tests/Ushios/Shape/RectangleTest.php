<?php
namespace Ushios\Shape\Test;

use Ushios\Shape\Rectangle;

class RectangleTest extends \PHPUnit_Framework_TestCase
{
    public function testMakeInstance()
    {
        $rectangle = new Rectangle(200, 200);
        $this->assertNotNull($rectangle);
    }

    public function testGetterSetter()
    {
        $rectangle = new Rectangle();
        $rectangle->setWidth(100);
        $rectangle->setHeight(200);

        $this->assertEquals(200, $rectangle->getHeight());
        $this->assertEquals(100, $rectangle->getWidth());
    }
}
