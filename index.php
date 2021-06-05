<!DOCTYPE html>

<head>
<title>Home Page</title>
</head>

<body>

<h1>Welcome Back CECE (V^.^)/ <br></h1>

<h1> Create Account Student or Advocate Account<br> </h1>

  <?php #this is for the student to log in using the student table in sql or create a new account and add the new
        # student into the student table in sql?>
 
<h2>Create New Student Account or Log In to Student Account</h2>
<form action="CreateStudent.php" method=post>
<input type="submit" value="New Student">
</form>
<form action="StudentLogIn.php" method=post>
<input type="submit" value="StudentLogin">
</form>

 <?php #this is for the advocate to log in using the advocate table in sql or create a new account and add the new
        # advocate into the advocate table in sql?>
 
<h2>Create New Advocate Account or Log In to Adovocate Account</h2>
<form action="CreateAdvocate.php" method=post>
<input type="submit" value="New Advocate">
</form>
<form action="AdvocateLogIn.php" method=post>
<input type="submit" value="AdvocateLogin">
</form>

<?php #this is for the Admin however there is only one admin so you can only create another
      #  admin via mysql, in order to log into as an admin?>
 
<h2>Log In to Admin Account</h2>
<form action="CreateAdmin.php" method=post>
<input type="submit" value="New Admin">
</form>
<form action="AdminLogIn.php" method=post>
<input type="submit" value="AdminLogin">
</form>

</body>
</html>