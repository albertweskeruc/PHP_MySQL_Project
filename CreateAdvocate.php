<?php
require_once('ConfigSQL.php');
?>

<!DOCTYPE HTML>
<head>
<title>Create Advocate Account</title>
</head>

<body>
<h1>Add Advocate Account Info</h1>
<div id=menu>
<form action="CreateAdvocate.php" method="post">
First Name: <input type="text" name="first_name"><br><br>
Middle Name: <input type="text" name="middle_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>

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
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : " ";
    $middleName = isset($_POST['middle_name']) ? $_POST['middle_name'] : " ";
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : " ";
    $username = isset($_POST['username']) ? $_POST['username'] : " ";
    $password = isset($_POST['password']) ? $_POST['password'] : " ";

    //insert to User table;
    $queryUser  = "INSERT INTO advocate (U_username, U_password, U_first, U_middle, U_last)
                VALUES ('".$username."', '".$password."', '".$firstName."', '".$middleName."', '".$lastName."');";
    if ($conn->query($queryUser) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
    }
    echo "<p>Hello Advocate" .$firstName. " ".$middleName." ".$lastName."!<br> Your username is: ".$username."</p>";

}
?>

</body>
</html>