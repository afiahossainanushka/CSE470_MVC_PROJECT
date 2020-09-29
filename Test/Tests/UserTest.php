<?php 

class UserTest extends \PHPUnit\Framework\TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('anushka');

		$this->assertEquals($user->getFirstName(),'anushka');
	}

    public function testMultiplication()
    {
    	$user = new \App\Models\User;

        $this->assertEquals($user->multiplication(),6);

    } 

    public function testDivision()
    {
    	$user = new \App\Models\User;

        $this->assertEquals($user->division(),2);

    } 

    public function testAdd()
    {
    	$user = new \App\Models\User;

        $this->assertEquals($user->add(),9);

    }

    public function testSubtract()
    {
    	$user = new \App\Models\User;

        $this->assertEquals($user->subtract(),3);

    }      
  




}