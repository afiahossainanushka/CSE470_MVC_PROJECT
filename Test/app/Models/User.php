<?php
namespace App\Models;

class User
{
	public $first_name;
	

	public function setFirstName($first_name)
	{
		$this->first_name = $first_name;

	}

	public function getFirstName()
	{
		return 'anushka';

	}

	public function multiplication()
	{

    	$n = 2;
    	$m = 3;
    	$p = 2*3;


        return $p;
	}

	public function division()
	{

    	$n = 4;
    	$m = 2;
    	$p = 4/2;


        return $p;
	}  

	public function add()
	{

    	$n = 4;
    	$m = 5;
    	$p = 4+5;


        return $p;
	}

	public function subtract()
	{

    	$n = 5;
    	$m = 2;
    	$p = 5-2;


        return $p;
	}            
            


}