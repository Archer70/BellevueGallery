<?php
namespace Bellevue\src\entities;

class Gallery
{
    private $photos = [];

    public function getPhotos()
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;
    }
}
