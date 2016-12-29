<?php
class FooTest extends PHPUnit_Framework_TestCase
{
	public function testFoo()
	{
		$this->assertTrue(true);
		$this->assertFalse(False);
	}
	
	public function testFooEquals()
	{
		$this->assertEquals('bar', 'bar');
	}

}
