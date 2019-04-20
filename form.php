<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<?php
		if(isset($_POST['submit']))
			{
				$name = $_POST['name'];
				if(empty($name))
				{
					echo 'name is not allow empty';
				} elseif (strlen($name) < 5 || strlen($name) > 10) {
					echo 'must chars greater than 5 chars and less then 10';
				} else
				{
					echo 'welcome '. $name;
				}
			}
	?>


	<form action="" method="POST">
		<input type="name" name="name"> <br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>