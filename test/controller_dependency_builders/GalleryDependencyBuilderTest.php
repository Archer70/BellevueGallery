<?php
namespace Bellevue\test\controller_dependency_builders;
use Bellevue\src\controller_dependency_builders\GalleryDependencyBuilder;

class GalleryDependencyBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsInstanceOfGalleryInteractor()
    {
        $builder = new GalleryDependencyBuilder();
        $this->assertInstanceOf(
            'Bellevue\src\interactors\GalleryInteractor', $builder->getInteractor());
    }
}
