<!-- 7.Write a php program with suitable example of inheritance. -->


<?php 
class susan 
{
	public function display()
	{
	echo "Nepal is the ";
}
}
class susan1 extends susan
{
	public function view()
	{
		echo "beautiful country.";
	}
}
$obj = new susan1();
$obj->display();
$obj->view();

 ?>							