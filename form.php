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
				} 
				 else
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