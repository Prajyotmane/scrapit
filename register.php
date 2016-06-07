<?php
$_GET['method']();

function regfrompage()
	{
	    $uid="123";
		$email=$_POST['form-username'];
		$cont=986532;
		$dob="1522";
		$city="hbhbs";
		$gender=" ";
		$pass=$_POST['form-password'];
		$this->Register($uid,$email,$cont,$dob,$city,$gender,$pass);
	}
function Register($uid,$email,$cont,$dob,$city,$gender,$pass){
     $host="ec2-23-21-102-155.compute-1.amazonaws.com";
	$password="FFLiMoCgcllvlA1pHMxiNBwSTT";
	$username="sitexwsingsyay";
	$database="d4o8tbiijf5hsu";
	$con=new mysqli($host,$username,$password,$database);
	 
	if($con->connect_error)
	{
		trigger_error('Database Connection Failed: '.$con->connect_error,E_USER_ERROR);
	}
	
	
		
		$res=$con->query("create table user(email varchar(50),password varchar(20));");
		$res=$con->query("insert into user values('$email','$pass');");
		if($res===true)
		{
			$res=$con->query("Select * from user where Email='$email'AND Password='$pass';");
			$row=$res->fetch_assoc();
			session_start();
			$_SESSION['id']=$row['Userid'];
			$_SESSION['email']=$row['Email'];

			
			header('Location:profilpic.html');
		}
		else{
			echo "<script type='text/javascript'>alert('Error acured While registration, Your Email Id is already registered');
			window.location.href = 'http://localhost/Project MD/New folder/signup.php';</script>";
		}
	}
	?>