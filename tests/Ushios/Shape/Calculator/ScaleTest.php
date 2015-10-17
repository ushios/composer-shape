<?php
namespace Ushios\Shape\Calculator\Test;

use Ushios\Shape\Calculator\Scale;
use Ushios\Shape\Rectangle;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance()
    {
        $scale = new Scale();
    }

    public function testSquareAndSquare()
    {
        $this->scaleCompare(
            200, 200,
            400, 400,
            200, 200
        );
    }

    public function testTallAndWide()
    {
        $this->scaleCompare(
            200, 400,
            400, 200,
            800, 400
        );
    }

    public function testWideAndTall()
    {
        $this->scaleCompare(
            400, 200,
            200, 400,
            400, 800
        );
    }

    public function testTallAndTall()
    {
        $this->scaleCompare(
            200, 400,
            100, 800,
            200, 1600
        );
    }

    public function testTallAndTallNoScale()
    {
        $this->scaleCompare(
            200, 400,
            200, 800,
            200, 800
        );
    }

    public function testWidthAndWidth()
    {
        $this->scaleCompare(
            400, 200,
            400, 100,
            800, 200
        );
    }

    public function testWidthAndWidthNoScale()
    {
        $this->scaleCompare(
            400, 200,
            800, 200,
            800, 200
        );
    }

    protected function scaleCompare(
        $baseWidth, $baseHeight,
        $targetWidth, $targetHeight,
        $newWidth, $newHeight) {
        $base = new Rectangle($baseWidth, $baseHeight);
        $target = new Rectangle($targetWidth, $targetHeight);

        $newRect = Scale::fill($base, $target);
        $this->assertEquals($newWidth, $newRect->getWidth());
        $this->assertEquals($newHeight, $newRect->getHeight());
    }
}
