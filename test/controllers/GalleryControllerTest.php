<?php
namespace Bellevue\test\controllers;
use Bellevue\src\controllers\GalleryController;

class GalleryControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testPassesUserIdToInteractor()
    {
        $controller = new GalleryController(new GalleryBuilderFake());
        $controller->view(1);
        $this->assertTrue(GalleryInteractorSpy::$idPassed);
    }
}

class GalleryBuilderFake
{
    public function getInteractor()
    {
        return new GalleryInteractorSpy();
    }
}

class GalleryInteractorSpy
{
    public static $idPassed = false;

    public function view($id)
    {
        if ($id) {
            self::$idPassed = true;
        }
    }
}
