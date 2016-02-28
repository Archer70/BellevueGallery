<?php
namespace Bellevue\src\entities;

class Photo
{
	private $id;
	private $title;
	private $description;
	private $fileName;
	private $galleryId;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
	}

	public function getGalleryId()
	{
		return $this->galleryId;
	}

	public function setGalleryId($id)
	{
		$this->galleryId = $id;
	}
}
