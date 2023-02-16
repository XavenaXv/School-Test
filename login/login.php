<!DOCTYPE html>

<html>
    <body>
        <form action="" method="post">

            <input type="text" id="user" name="user" placeholder="user">
            <input type="pass" id="pass" name="pass" placeholder="pass">
            <input type="submit" value="Login">

        </form>
    </body>

    <?php
    
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $_POST['user'];
	$password = $_POST['pass'];

	if(( $username == "admin") and ($password == "admin")){
		header('Location: sijine.php');
    exit;

	
		}else{
            echo "Incorrect cuy!";
        }

	}

    ?>
</html>
