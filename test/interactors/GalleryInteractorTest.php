<?php
namespace Bellevue\test\interactors;
use Bellevue\src\interactors\GalleryInteractor;
use Bellevue\src\library_interfaces\information_storage\GalleryInformationStorage;
use Bellevue\src\library_interfaces\presenters\GalleryPresenter;
use Bellevue\src\entities\Gallery;

class GalleryInteractorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->interactor = new GalleryInteractor(
            new GalleryStorageFake(), new GalleryPresenterFake());
        GalleryStorageFake::$calledGetPhotos = false;
        GalleryPresenterFake::$renderCalled = false;
        GalleryPresenterFake::$gotPhotos = false;
    }

    public function testCallsRenderOnPresenter()
    {
        $this->interactor->view(1);
        $this->assertTrue(GalleryPresenterFake::$renderCalled);
    }

    public function testCallsGetPhotosOnStorage()
    {
        $this->interactor->view(1);
        $this->assertTrue(GalleryStorageFake::$calledGetPhotos);
    }

    public function testCreatsPhotosFromStorageInfo()
    {
        $this->interactor->view(1);
        $this->assertTrue(GalleryPresenterFake::$gotPhotos);
    }
}

class GalleryStorageFake implements GalleryInformationStorage
{
    public static $calledGetPhotos = false;
    public function getPhotosInGallery($id)
    {
        self::$calledGetPhotos = true;

        $photo = new \stdClass();
        $photo->id = 1;
        $photo->title = 'title';
        $photo->description = 'desc';
        $photo->filename = 'hash.jpg';
        $photo->gallery = 1;
        return [$photo];
    }
}

class GalleryPresenterFake implements GalleryPresenter
{
    public static $renderCalled = false;
    public static $gotPhotos = false;
    public function render(Gallery $gallery)
    {
        self::$renderCalled = true;
        if (count($gallery->getPhotos()) > 0) {
            self::$gotPhotos = true;
        }
    }
}
