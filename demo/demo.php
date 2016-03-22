<?php

	include '../debug.php';

	class test1
	{
		public $string = "Test string";
		public $boolean = true;
		public $integer = 17;
		public $float = 9.99;
		public $array = array ('bob'=>'alice',true=>false,1=>5,2=>1.4);
		public $object;
	}

	class test2
	{
		public $another;
	}

	class test3
	{
		public $string1 = "3d level";
		public $string2 = "123";
		public $complicated;
	}

	class test4
	{
		public $enough = "Level 4";
		public $something = "Thanks for the fish!";
	}

	$test = new test1 ();
	$test->object = new test2();
	$test->object->another = new test3 ();
	$test->object->another->complicated = new test4 ();

	debug ($test);

	debug ($test, "This is debug title");

	//Expand all levels while default expanded level depth is 2
	debug ($test, true);

	//Add * before title to expand all levels with title
	debug ($test, "* Expand all levels with title");

	echo "<pre>";
	debug ($test, "Output as plain text", true);
	echo "</pre>";

	debug ($test, date('Y-m-d H:i:s').": Save plain text to file ", "./test.log");

	debug ($test, "Limit level rendering to 1", false, 1);

	$pi = 3.14159265359;
	debug ($pi, "hello this is pi");

	$hm = array (1=>array(2=>array(3=>array(4=>array(5=>array(6=>array(7=>array(8=>"Last depth we created"))))))));
	debug ($hm, "* A very complicated expanded array");
	debug ($hm, "* More levels", false, 10);

?>