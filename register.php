<?php
echo $_GET['method'];
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
		Register($uid,$email,$cont,$dob,$city,$gender,$pass);
	}
function Register($uid,$email,$cont,$dob,$city,$gender,$pass){
	$name="Hi"
     $host="host=ec2-23-21-102-155.compute-1.amazonaws.com";
	 $credentials="user=sitexwsingsyay password=FFLiMoCgcllvlA1pHMxiNBwSTT"
	// $password="FFLiMoCgcllvlA1pHMxiNBwSTT";
	// $username="sitexwsingsyay";
	 $database="dbname=d4o8tbiijf5hsu";
	 $port="port=5432"
	// $con=new mysqli($host,$username,$password,$database);
	 $con = pg_connect("$host $port $database $credentials");
	if(!$con)
	{
		echo "Error";
	}
	else
		echo "Opened database successfully\n"
	
		 $sql =<<<EOF
      CREATE TABLE USER
      (ID INT PRIMARY KEY     NOT NULL,
      UNAME           TEXT    NOT NULL,
      EMAIL            CHAR(100)     NOT NULL,
      PASSWORD        CHAR(50));
EOF;
		$ret = pg_query($con, $sql);
       if(!$ret){
      echo pg_last_error($db);
     } else {
      echo "Table created successfully\n";
   }
   $sql=<<<EOF
   INSERT INTO USER (ID,UNAME,EMAIL,PASSWORD)
      VALUES (1,$name,$email,$pass );
EOF;
 $ret = pg_query($con, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($con);
		
	}
	?>