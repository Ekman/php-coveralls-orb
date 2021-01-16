<?php

use Nekman\PhpCoverallsOrb\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
	/** @covers Foo::foo */
	public function testFoo()
	{
		$foo = new Foo();
		$this->assertEquals("Hello bar", $foo->foo("bar"));
	}
}
