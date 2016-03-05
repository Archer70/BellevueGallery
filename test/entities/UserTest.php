<?php
namespace Bellevue\test\entities;
use Bellevue\src\entities\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    private $user;

    public function setUp()
    {
        $this->user = new User();
    }

    public function testGetId()
    {
        $this->assertNull($this->user->getId());
    }

    public function testSetId()
    {
        $this->user->setId(2);
        $this->assertEquals(2, $this->user->getId());
    }

    public function testGetEmail()
    {
        $this->assertNull($this->user->getEmail());
    }

    public function testSetEmail()
    {
        $this->user->setEmail('fake@fake.com');
        $this->assertEquals('fake@fake.com', $this->user->getEmail());
    }

    public function testGetName()
    {
        $this->assertNull($this->user->getName());
    }

    public function testSetName()
    {
        $this->user->setName('Bob');
        $this->assertEquals('Bob', $this->user->getName());
    }

    public function testOptionalConstructorDataPopulation()
    {
        $user = new User([
            'id' => 1,
            'email' => 'fake@fake.com',
            'name' => 'Bob'
        ]);
        $this->assertEquals(1, $user->getId());
        $this->assertEquals('fake@fake.com', $user->getEmail());
        $this->assertEquals('Bob', $user->getName());
    }
}
