<?php
namespace Bellevue\src\interactors;
use Bellevue\src\library_interfaces\information_storage\GalleryInformationStorage;
use Bellevue\src\library_interfaces\presenters\GalleryPresenter;
use Bellevue\src\entities\Gallery;
use Bellevue\src\entities\Photo;

class GalleryInteractor
{
    private $storage;
    private $presenter;

    public function __construct(GalleryInformationStorage $storage, GalleryPresenter $presenter)
    {
        $this->storage = $storage;
        $this->presenter = $presenter;
    }

    public function view($userId)
    {
        $gallery = $this->populateGallery(
            $this->storage->getPhotosInGallery(1));
        $this->presenter->render($gallery);
    }

    private function populateGallery(array $photos)
    {
        $gallery = new Gallery();
        foreach ($photos as $photoInfo) {
            $photo = new Photo();
            $photo->setId($photoInfo->id);
            $photo->setTitle($photoInfo->title);
            $photo->setDescription($photoInfo->description);
            $photo->setFileName($photoInfo->filename);
            $photo->setGalleryId($photoInfo->gallery);
            $gallery->addPhoto($photo);
        }
        return $gallery;
    }
}
