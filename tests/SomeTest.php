<?php;

require_once "config.php";

class SomeTest extends PHPUnit_Framework_TestCase {

	public function test_something()
	{
		$this->assertEquals(2, 1+1);
	}

}
