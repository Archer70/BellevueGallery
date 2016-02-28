<?php
namespace Bellevue\test\controllers;
use Bellevue\src\controllers\PhotoController;

class PhotoControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testReceivesDependencyBuilder()
    {
        new PhotoController(new DependencyBuilder());
    }

    public function testPassesPhotoIdToInteractor()
    {
        $controller = new PhotoController(new DependencyBuilder());
        $controller->view(1);
        $this->assertTrue(Interactor::$idGiven);
    }
}

class DependencyBuilder
{
    public function getInteractor()
    {
        return new Interactor();
    }
}

class Interactor
{
    public static $idGiven = false;
    public function view($id)
    {
        if ($id) {
            self::$idGiven = true;
        }
    }
}
