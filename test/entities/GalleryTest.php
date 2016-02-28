<?php
namespace Bellevue\test\entities;
use Bellevue\src\entities\Gallery;
use Bellevue\src\entities\Photo;

class GalleryTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsArrayOfPhotos()
    {
        $gallery = new Gallery();
        $this->assertEquals([], $gallery->getPhotos());
    }

    public function testCanAddPhoto()
    {
        $gallery = new Gallery();
        $gallery->addPhoto(new Photo());
        $this->assertEquals(1, count($gallery->getPhotos()));
    }
}
