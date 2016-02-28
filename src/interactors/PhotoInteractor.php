<?php
namespace Bellevue\src\interactors;
use Bellevue\src\library_interfaces\PhotoInformationStorage as Storage;
use Bellevue\src\entities\Photo;
use Bellevue\src\library_interfaces\presenters\PhotoPresenter;

class PhotoInteractor
{
	private $storage;
	private $presenter;

	public function __construct(Storage $storage, PhotoPresenter $presenter)
	{
		$this->storage = $storage;
		$this->presenter = $presenter;
	}

	public function save()
	{
		$photo = new Photo();
		$this->storage->save($photo);
	}

	public function view($id)
	{
		$info = $this->storage->getById($id);
		$photo = new Photo();
		$photo->setTitle($info->title);
		$photo->setDescription($info->description);
		$photo->setFileName($info->filename);
		$this->presenter->render($photo);
	}
}
