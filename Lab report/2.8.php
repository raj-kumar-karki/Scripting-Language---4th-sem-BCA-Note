<!-- 8.Write a php program with method overriding. -->


<?php 
class susan{
	public function calc($a,$b){
		return $a * $b;
	}
}
class latika extends susan{
 public function calc($a,$b){
 	return $a + $b;
 }
 }
$test = new susan();
echo $test->calc(60,15);
 ?>
