<?php
	function sumfn($a, $b){
		$c = $a + $b;
		echo $a . '+' . $b . '=' . $c ;
		
	}
?>

<?php
	function subtractfn($a, $b){
		echo $a . '-' . $b . '=';
		return $a - $b;
	}
?>
<?php
	function multiple($a, $b){
		echo $a . 'x' . $b . '=';
		return $a * $b;
	}
?>
<?php
	function divided($a, $b){
		echo $a . '/' . $b . '=';
		return $a / $b;
	}
?>

<form action="" method="GET">
	<input type="number" name="number_1" placeholder="">
	<input type="number" name="number_2" placeholder=""> <br><br>

	<input type="submit" name="plus" value="+">
	<input type="submit" name="subtract" value="-">
	<input type="submit" name="multiple" value="x">
	<input type="submit" name="divided" value="/">
</form>

<?php 
if (isset($_GET['plus'])) 
	{
		$n1 = $_GET['number_1'];
		$n2 = $_GET['number_2'];
		echo sumfn($n1, $n2);
	}
	elseif (isset($_GET['subtract'])) 
	{
		$n1 = $_GET['number_1'];
		$n2 = $_GET['number_2'];
		echo subtractfn($n1, $n2);
	} 
	elseif (isset($_GET['multiple'])) 
	{	
		$n1 = $_GET['number_1'];
		$n2 = $_GET['number_2'];
		echo multiple($n1, $n2);
	}
	elseif (isset($_GET['divided'])) 
	{
		$n1 = $_GET['number_1'];
		$n2 = $_GET['number_2'];
		echo divided($n1, $n2);
	}

?>