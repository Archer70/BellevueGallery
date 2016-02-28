<?php
namespace Bellevue\src\library_interfaces\presenters;
use Bellevue\src\entities\Photo;

interface PhotoPresenter
{
	public function render(Photo $photo);
}