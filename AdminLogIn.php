<?php

session_start();
require_once("ConfigSQL.php");
$_SESSION['logged_in'] = false;

if (!empty($_POST)){
    if (isset($_POST['Submit'])){
        $input_username = isset($_POST['username']) ? $_POST['username'] : " ";
        $input_password = isset($_POST['password']) ? $_POST['password'] : " ";
        
        $queryAdmin = "SELECT * FROM Admin  WHERE U_username='".$input_username."' AND U_Password='".$input_password."';";
        $resultAdmin = $conn->query($queryAdmin);
        
        if ($resultAdmin ->num_rows > 0  ) {
            //if there is a result, that means that the user was found in the database
            $_SESSION['admin_user'] = $input_username;
            $_SESSION['logged_in'] = true;
            header("Location: LogInSuccess.php");
            exit;
        } else {
            echo "User not found.";
        }
    }
}
?>

<!DOCTYPE HTML>
<head>
<title>Admin Log In</title>
</head>
<body>
<h1>Admin Log In</h1>
<div id="menu">
<form action="AdminLogIn.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password"><br><br>
<input name='Submit' type="submit" value="Submit">
</form>
</div>
<a href="CreateAdmin.php">CREATE Admin ACCOUNT</a><br>

<br>
</div>
<a href="index.php">Back</a><br>

</body>
</html>>