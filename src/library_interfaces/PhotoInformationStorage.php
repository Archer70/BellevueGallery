<?php
namespace Bellevue\src\library_interfaces;
use Bellevue\src\entities\Photo;

interface PhotoInformationStorage
{
	public function save(Photo $photo);
	public function getById($id);
}
