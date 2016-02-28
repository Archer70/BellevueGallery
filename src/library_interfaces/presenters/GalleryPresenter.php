<?php
namespace Bellevue\src\library_interfaces\presenters;
use Bellevue\src\entities\Gallery;

interface GalleryPresenter
{
    public function render(Gallery $gallery);
}
