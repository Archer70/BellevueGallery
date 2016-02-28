<?php
namespace Bellevue\test\mocks;
use Bellevue\src\library_interfaces\presenters\PhotoPresenter as Presenter;
use Bellevue\src\entities\Photo;

class PhotoPresenter implements Presenter
{
	public $presented = false;
	
	public function render(Photo $photo)
	{
		$this->presented = true;
	}
}