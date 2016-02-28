<?php
namespace Bellevue\test\mocks;
use Bellevue\src\library_interfaces\PhotoInformationStorage;
use Bellevue\src\entities\Photo;

class PhotoInformationStorageSpy implements PhotoInformationStorage
{
	public $saved = false;
	public $fetchedOne = false;

	public function save(Photo $pic)
	{
		$this->saved = true;
	}

	public function getById($id)
	{
		$this->fetchedOne = true;
		$info = new \stdClass();
		$info->title = 'title';
		$info->description = 'desc';
		$info->filename = 'filename';
		return $info;
	}
}
