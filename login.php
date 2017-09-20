<?php
	session_start();
	include("includes/mysqli_connect.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($dbc, $username);
			$password = mysqli_real_escape_string($dbc, $password);
			$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT * FROM staff WHERE staff_username='$username' and staff_password='$password'";
			$result=mysqli_query($dbc,$sql);
			  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $sid = $row['staff_id'];
				$staffname = $row['staff_fname'];
				$staffsname = $row['staff_sname'];
            }
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['sid'] = $sid;
				$_SESSION['username'] = $username;
				$_SESSION['staff_fname'] = $staffname;
				$_SESSION['staff_sname'] = $staffsname;
				header("location: pages/dashboard.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}

		}
	}

?>