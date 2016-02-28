<?php
namespace Bellevue\test\presenters;

use Bellevue\src\presenters\PhotoPresenter;
use Bellevue\src\entities\Photo;
class PhotoPresenterTest extends \PHPUnit_Framework_TestCase
{
	public function testHasRenderMethod()
	{
		$this->expectOutputRegex('/./');
		$presenter = new PhotoPresenter();
		$presenter->render(new Photo());
	} // Well that's one way to do it. LOL
}
