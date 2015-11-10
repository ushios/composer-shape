<?php
namespace Ushios\Shape\Test;

use Ushios\Shape\Square;

class SquareTest extends \PHPUnit_Framework_TestCase
{
    public function testMakeInstance()
    {
        $square = new Square();
        $this->assertNotNull($square);
    }

    public function testGetterSetter()
    {
        $square = new Square();

        $square->setWidth(100);
        $this->assertEquals(100, $square->getHeight());

        $square->setHeight(200);
        $this->assertEquals(200, $square->getWidth());
    }
}
