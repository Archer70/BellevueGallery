<?php
namespace Bellevue\test\interactors;
use Bellevue\src\interactors\PhotoInteractor;
use Bellevue\test\mocks\PhotoInformationStorageSpy as Storage;
use Bellevue\test\mocks\PhotoPresenter as Presenter;

class PhotoTest extends \PHPUnit_Framework_TestCase
{
	private $interactor;
	private $storage;
	private $presenter;

	public function setUp()
	{
		$this->storage = new Storage();
		$this->presenter = new Presenter();
		$this->interactor = new PhotoInteractor($this->storage, $this->presenter);
	}

	public function testSavesPhotoInStorage()
	{
		$this->interactor->save();
		$this->assertTrue($this->storage->saved);
	}

	public function testCallsPresenterRender()
	{
		$this->interactor->view(1);
		$this->assertTrue($this->presenter->presented);
	}

	public function testCallsInfoStorageForPhotoInformation()
	{
		$this->interactor->view(1);
		$this->assertTrue($this->storage->fetchedOne);
	}
}
