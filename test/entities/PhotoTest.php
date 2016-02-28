<?php
namespace Bellevue\test\entities;
use Bellevue\src\entities\Photo;

class PhotoTest extends \PHPUnit_Framework_TestCase
{
	private $photo;

	public function setUp()
	{
		$this->photo = new Photo();
	}

	public function testGetId()
	{
		$this->assertNull($this->photo->getId());
	}

	public function testSetId()
	{
		$this->photo->setId(1);
		$this->assertEquals(1, $this->photo->getId());
	}

	public function testGetTitleGetsTheSetTitle()
	{
		$this->photo->setTitle('Cool Photo');
		$this->assertEquals('Cool Photo', $this->photo->getTitle());
	}

	public function testSetAndGetDescription()
	{
		$this->photo->setDescription('Cool description');
		$this->assertEquals('Cool description', $this->photo->getDescription());
	}

	public function testGetFileNameIsFunction()
	{
		$this->photo->getFileName();
	}

	public function testSetFileNameIsFunction()
	{
		$this->photo->setFileName('file.png');
	}

	public function testSetAndGetFileName()
	{
		$this->photo->setFileName('cool-picture.png');
		$this->assertEquals('cool-picture.png', $this->photo->getFileName());
	}

	public function testGetGalleryId()
	{
		$this->assertNull($this->photo->getGalleryId());
	}

	public function testSetGalleryId()
	{
		$this->photo->setGalleryId(1);
		$this->assertEquals(1, $this->photo->getGalleryId());
	}
}
