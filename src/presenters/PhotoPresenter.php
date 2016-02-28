<?php
namespace Bellevue\src\presenters;
use Bellevue\src\library_interfaces\presenters\PhotoPresenter as Presenter;
use Bellevue\src\entities\Photo;

class PhotoPresenter extends AbstractPresenter implements Presenter
{
	public function render(Photo $photo)
	{
		$this->outputTemplate('photo.html', [
			'page-title' => gettext('Photo'),
			'photo-title' => $photo->getTitle(),
			'photo-description' => $photo->getDescription(),
			'photo-filename' => $photo->getFileName(),
			'lang' => [
				'next' => gettext('next'),
				'previous' => gettext('previous'),
				'comments' => gettext('Comments'),
				'back-to-gallery' => gettext('back to gallery')
			],
			'paths' => $this->paths()
		]);
	}
}
