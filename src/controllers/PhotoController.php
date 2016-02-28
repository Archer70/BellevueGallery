<?php
namespace Bellevue\src\controllers;
use Bellevue\src\interactors\PhotoInteractor;
use Bellevue\src\storage\sqlite\PhotoInformation as Storage;
use Bellevue\src\presenters\PhotoPresenter;

class PhotoController
{
    public function __construct($dependencyBuilder)
    {
        $this->interactor = $dependencyBuilder->getInteractor();
    }

    public function view($id)
    {
        $this->interactor->view($id);
    }
}
