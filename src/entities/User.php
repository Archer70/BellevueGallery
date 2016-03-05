<?php
namespace Bellevue\src\entities;

class User
{
    private $id;
    private $email;
    private $name;

    public function __construct(array $info = [])
    {
        if (isset($info['id'], $info['email'], $info['name'])) {
            $this->id = (int) $info['id'];
            $this->email = (string) $info['email'];
            $this->name = (string) $info['name'];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = (string) $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = (string) $name;
    }
}
