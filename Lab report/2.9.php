<!-- 9.Write a php program with constructor and destructor. -->


<?php 
class raj{
	function __construct()
	{
		echo "How are you?<br><br>";
	}
	function raj1()
	{
		echo "The climate is good.<br>";
	}
	function __destruct()
	{
		echo "<br>See you again.";
	}
}
 $obj1 = new raj();
 $obj1->raj1();
 $obj1->raj1();
 $obj1->raj1();

 ?>
