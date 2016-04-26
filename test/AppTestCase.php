<?php

namespace Test;

class AppTestCase extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        if ($container = \Mockery::getContainer()) {
            $this->addToAssertionCount($container->mockery_getExpectationCount());
        }
        \Mockery::close();
    }
}
