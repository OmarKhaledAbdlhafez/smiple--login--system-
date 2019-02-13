<?php
  session_start();
      echo "<h1>"."welcome ".$_SESSION["name"]."</h1>";
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        	<style type="text/css">
        		p{
        			text-align: center;
        		}
        		ul{
        			float: right;
        		}
        	</style>
        </head>
        <body>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <ul>
	<li><a href="home.php">home</a></li>
	<li><a href="about.php">about us</a></li>
	<li><a href="logout.php">logout</a></li>

</ul>
        </body>
        </html>
