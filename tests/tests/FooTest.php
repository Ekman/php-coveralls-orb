<?php

use Nekman\PhpCoverallsOrb\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
	public function testFoo()
	{
		$foo = new Foo();
		$this->assertEquals("Hello bar", $foo->foo("bar"));
	}
}
