<?php
namespace Bellevue\src\controller_dependency_builders;
use Bellevue\src\interactors\PhotoInteractor;
use Bellevue\src\storage\sqlite\PhotoInformation;
use Bellevue\src\presenters\PhotoPresenter;

class PhotoDependencyBuilder
{
    public function getInteractor()
    {
        return new PhotoInteractor(
            new PhotoInformation(),
            new PhotoPresenter());
    }
}
