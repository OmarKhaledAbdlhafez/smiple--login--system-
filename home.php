 <?php
  session_start();
        echo "<h1>"."ur name is ". $_SESSION["name"]."</h1>";
        echo "<br>";
        echo "ur password is ". $_SESSION["pass"];
        ?>
        <!DOCTYPE html>
<html>
<head>
<style type="text/css">
	ul {
		float: right;
	}

</style>
</head>
<body>
<ul>
	<li><a href="home.php">home</a></li>
	<li><a href="about.php">about us</a></li>
	<li><a href="logout.php">logout</a></li>

</ul>
</body>
</html>