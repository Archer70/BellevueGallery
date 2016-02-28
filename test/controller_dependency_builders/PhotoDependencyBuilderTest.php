<?php
namespace Bellevue\test\controller_dependency_builders;
use Bellevue\src\controller_dependency_builders\PhotoDependencyBuilder;

class PhotoDependencyBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsInteractor()
    {
        $builder = new PhotoDependencyBuilder();
        $this->assertInstanceOf(
            'Bellevue\src\interactors\PhotoInteractor', $builder->getInteractor());
    }
}
