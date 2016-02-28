<?php
namespace Bellevue\src\presenters;
use Bellevue\src\library_interfaces\presenters\GalleryPresenter as Presenter;
use Bellevue\src\entities\Gallery;

class GalleryPresenter extends AbstractPresenter implements Presenter
{
    public function render(Gallery $gallery)
    {
        $this->outputTemplate('gallery.html', [
            'page-title' => 'Gallery',
            'photos' => $this->photos($gallery),
            'paths' => $this->paths()
        ]);
    }

    private function photos($gallery)
    {
        $photos = [];
        foreach ($gallery->getPhotos() as $photoInfo) {
            $photo = [];
            $photo['id'] = $photoInfo->getId();
            $photo['title'] = $photoInfo->getTitle();
            $photo['description'] = $photoInfo->getDescription();
            $photo['filename'] = $photoInfo->getFileName();
            $photo['gallery'] = $photoInfo->getGalleryId();
            $photos[] = $photo;
        }
        return $photos;
    }
}
