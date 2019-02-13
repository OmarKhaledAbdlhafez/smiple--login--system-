<html>
    <head>
        
    </head>
    <body>
        
        <form action="" method="post"enctype="multipart/form-data">
            <input type="text" name="name"
                 value="<?php
                   if (isset($_COOKIE['username'])){
                       echo $_COOKIE["username"];
                   }
                   ?>"
                   placeholder="username">
            <br>
            <input type="password"
               value="<?php
                if (isset($_COOKIE["password"])){
                    echo $_COOKIE["password"];
                }
                ?>"
                   name="password" placeholder="password">
            <br>
            <input type="checkbox" name="checkbox" value="1">remmber me 
            <br>
            <input type="submit" name="log">
            <?php
            $name= "omar";
            $pass = "omar";
            if (isset($_POST['log'])) {

                if (($name == $_POST["name"]) && ($pass == $_POST["password"])) {
                    session_start();
                    $_SESSION["name"] = $_POST['name'];
                    $_SESSION["pass"] = $_POST['password'];
                    if (isset($_POST["checkbox"])) {
                        setcookie("username", $_SESSION["name"], time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("password", $_SESSION["pass"], time() + (10 * 365 * 24 * 60 * 60));
                    }
                    else {
                        setcookie("username","", time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("password", "", time() + (10 * 365 * 24 * 60 * 60));
                    }

                    header("location: home.php");
                } else {
                    echo "<h1>"."invalid data"."</h1>";
                }
            }
            ?>
        </form>
    </body>
</html>