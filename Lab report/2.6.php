<!-- 6.Write a php progrma using SESSION. -->

---create
<?php 
	session_start();
	// a session is a way to store infromation in a variable to be used across multiple pages. 

	$_SESSION["favcolor"] = "orange";

	echo "session varaible is set. "

?>

---delete
<?php 
	session_start();  //session start chai garnai parxa 

	session_unset();   //orange lai hatako   seession : favcolor == orange

	session_destroy();

	echo "session id destroy.";

?>

---view
<?php 
		session_start();

		echo "favorite color: ". $_SESSION["favcolor"];

?>