<?php

namespace ChurakovMike\Project\Tests;

use ChurakovMike\Project\TestClass;
use PHPUnit\Framework\TestCase;

class TestClassTest extends TestCase
{
    public function testPackage(): void
    {
        $object = new TestClass();
        $this->assertEquals('foo', $object->func1());
    }
}
