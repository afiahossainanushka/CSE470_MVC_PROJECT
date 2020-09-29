<?php 
use PHPUnit\Framework\TestCase;
class FooTest extends TestCase{

	public function teardown()
	{
		Mockery::close();

	}


	public function test_mockery()
	{

		$mock = Mockery::mock('App\Models\Bar');
		$mock->shouldReceive('run')->once()->andReturn('mocked');


		var_dump($mock->run());

	}
}