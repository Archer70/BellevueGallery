<?php
namespace Bellevue\src\controllers;

class GalleryController
{
    public function __construct($dependencyBuilder)
    {
        $this->interactor = $dependencyBuilder->getInteractor();
    }

    public function view($userId)
    {
        $this->interactor->view((int) $userId);
    }
}
