<?php
namespace Bellevue\test\presenters;
use Bellevue\src\presenters\GalleryPresenter;
use Bellevue\src\entities\Gallery;

class GalleryPresenterTest extends \PHPUnit_Framework_TestCase
{
	public function testHasRenderMethod()
	{
		$this->expectOutputRegex('/./');
		$presenter = new GalleryPresenter();
		$presenter->render(new Gallery());
	} // Well that's one way to do it. LOL
}
