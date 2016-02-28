<?php
namespace Bellevue\test\mocks;

class RouterSpy
{
    public static $staticFunctionCalled = false;
    public static $instanceMethodCalled = false;

    public static function staticFunction()
    {
        self::$staticFunctionCalled = true;
    }

    public function instanceMethod()
    {
        self::$instanceMethodCalled = true;
    }
}