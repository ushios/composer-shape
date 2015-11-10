<?php
namespace Ushios\Shape\Calculator\Test;

use Ushios\Shape\Calculator\Scale;
use Ushios\Shape\Rectangle;

class ScaleTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance()
    {
        $scale = new Scale();
        $this->assertNotNull($scale);
    }

    public function testSquareAndSquare()
    {
        $this->scaleCompare(
            200,
            200,
            400,
            400,
            200,
            200
        );

        $this->scaleCompare(
            1000,
            1000,
            500,
            200,
            2500,
            1000
        );
    }

    public function testTalls()
    {
        // Tall and wide
        $this->scaleCompare(
            200,
            400,
            400,
            200,
            800,
            400
        );

        // Tall and tall
        $this->scaleCompare(
            200,
            400,
            100,
            800,
            200,
            1600
        );

        // Tall and super tall
        $this->scaleCompare(
            100,
            400,
            1,
            800,
            100,
            80000
        );

        // tall nad tall no scale
        $this->scaleCompare(
            200,
            400,
            200,
            800,
            200,
            800
        );
    }

    public function testWides()
    {
        // Wide and tall
        $this->scaleCompare(
            400,
            200,
            200,
            400,
            400,
            800
        );

        // Wide and wide
        $this->scaleCompare(
            400,
            200,
            400,
            100,
            800,
            200
        );

        // wide and super wide
        $this->scaleCompare(
            400,
            200,
            800,
            100,
            1600,
            200
        );

        // wide no scale
        $this->scaleCompare(
            400,
            200,
            800,
            200,
            800,
            200
        );
    }

    protected function scaleCompare(
        $baseWidth,
        $baseHeight,
        $targetWidth,
        $targetHeight,
        $newWidth,
        $newHeight
    ) {
        $base = new Rectangle($baseWidth, $baseHeight);
        $target = new Rectangle($targetWidth, $targetHeight);

        $newRect = Scale::fillRectWithRect($base, $target);
        $this->assertEquals($newWidth, $newRect->getWidth());
        $this->assertEquals($newHeight, $newRect->getHeight());
    }
}
