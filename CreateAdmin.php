<?php
require_once('ConfigSQL.php');
?>

<!DOCTYPE HTML>
<head>
<title>Create Admin Account</title>
</head>

<body>
<h1>Add Admin Account Info</h1>
<div id=menu>
<form action="CreateAdmin.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="password" name="password"><br><br>

<input name='Submit' type="submit" value="Create">
</form>
<br>
<a href="index.php">Home</a></br>
</div>
<?php
if (isset($_POST['Submit'])){

    $userID = " ";
    /**
     * Grab information from the form submission and store values into variables.
     */
    $username = isset($_POST['username']) ? $_POST['username'] : " ";
    $password = isset($_POST['password']) ? $_POST['password'] : " ";

    //insert to User table;
    $queryUser  = "INSERT INTO Admin (U_username, U_password)
                VALUES ('".$username."', '".$password."');";
    if ($conn->query($queryUser) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
    }
    echo "<p>Hello New Admin"."!<br> Your username is: ".$username."</p>";

}
?>

</body>
</html>