<?php
namespace Bellevue\src\controller_dependency_builders;
use Bellevue\src\interactors\GalleryInteractor;
use Bellevue\src\storage\sqlite\GalleryInformation;
use Bellevue\src\presenters\GalleryPresenter;

class GalleryDependencyBuilder
{
    public function getInteractor()
    {
        return new GalleryInteractor(
            new GalleryInformation(),
            new GalleryPresenter());
    }
}
