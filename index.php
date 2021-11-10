<?php
include('dbconnect.php');
$msg = "";
$orgpassword = "";
$orgusertype = "";
if (isset($_POST['login'])) {
	$f = true;
	$i = 0;
	$username = $_POST['username'];
	$password = $_POST['pwd'];
	if ($username == '' and $password == '') {
		echo "Error";
		exit();
	}
	$sql = "select `password` from cycle1 where `username`='$username'";
	$result = mysqli_query($con_key, $sql) ;
	while ($row = mysqli_fetch_array($result)) {
		$orgpassword = $row['password'];
	}
	if ($orgpassword == $password) {
		$abc = "select `RFID_NO` from cycle1 where `username`='$username'";
		$qwerty = "select `Balance` from cycle1 where `username`='$username'";
		$asdf = "select `Station_No` from cycle1 where `username`='$username'";
		$xyz = "select `Slot_No` from cycle1 where `username`='$username'";
		$mno = "select `status` from cycle1 where `username`='$username'";
		$res = mysqli_query($con_key, $abc);
		$q = mysqli_query($con_key, $qwerty);
		$sat = mysqli_query($con_key, $asdf);
		$bat = mysqli_query($con_key, $xyz);
		$hat = mysqli_query($con_key, $mno);
		while ($id = mysqli_fetch_array($res)) {
			$rfid = $id['RFID_NO'];
		}
		while ($id = mysqli_fetch_array($q)) {
			$balance = $id['Balance'];
		}
		while ($id = mysqli_fetch_array($sat)) {
			$station_no = $id['Station_No'];
		}
		while ($id = mysqli_fetch_array($bat)) {
			$slot_no = $id['Slot_No'];
		}
		while ($id = mysqli_fetch_array($hat)) {
			$statusofslot = $id['status'];
		}
		session_start();
		$_SESSION['varname'] = $rfid;
		$_SESSION['var'] = $balance;
		$_SESSION['varn'] = $station_no;
		$_SESSION['varna'] = $slot_no;
		$_SESSION['varnam'] = $statusofslot;
		$_SESSION['va'] = $username;
?>
		<script type="text/javascript">
			window.location = 'home.php';
		</script>

<?php
		echo "success";
	} else {
		$msg = "incorrect username or password ";
	}
}
?>

<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<title> AUTOMATED ROVER SERVICE </title>

	<style>
		* {
			margin: 0;
			padding: 0;
			outline: none;
            align-content: center;
/*            box-sizing: border-box;*/
		}

		@media only screen and (min-device-width: 400px) {
			body {
				background-image:url('images/1.jpg');
/*                background: black;*/
			}
		}

		body {
			font-size: 100%;
			background-image: url('images/1.jpg');
            background: #000;
			width: 100%;
			height: 100vh;
			background-size: cover;
			background-repeat: no-repeat;
            overflow-x: hidden;
            
		}

		.header {
			font-size: 25px;
			color: white;
			padding-left: 25px;
			padding-top: 20px;
			float: left;
			font-family: sans-serif;
			width: 100%;
			height: auto;
		}

		ul {
			float: right;
			margin-right: 50px;

		}

		ul li {
			display: inline-block;
			padding: 10px;
			margin-top: 12px;
			cursor: pointer;
			font-family: sans-serif;
			color: white;
		}
        ul li:hover{
            color: dodgerblue;
        } 

		.form {
			width: 20%;
			height: 15%;
			margin-left: 38%;
			margin-top: 10%;
			border-radius: 8px;
/*			box-shadow: 0 0px 20px 10px rgb(254,254,254);*/
            background: #000;
			float: left;
			padding-bottom: 5%;
            padding-top: 2%;
            padding-left: 2%;
            padding-right: 2%;
            position: relative;
            
            
		}
        
        .form:before, .form:after{
             z-index: -1;
  content: '';
  position: absolute;
  width: calc(100% + 6px);
  height: calc(100% + 6px);
  top: -3px;
  left: -3px;
  background: linear-gradient(45deg, #f8accb, #80aeda,#79e69c,
              #ff9797,#e6f169,#fc0090,#d1cdea,#6ee2c6,#e7f356);
  background-size: 300%;
  animation: shadow 20s linear infinite;
        }
        
        .form:after{
  filter: blur(10px);
}
@keyframes shadow { 
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 300%;
  }
  100% {
    background-position: 0 0;
  }
}

		.title {
			width: 80%;
			height: auto;
			padding: 10px;
			margin-left: 0%;
			margin-top: 6%;
			border: none;
			border-radius: 5px;
/*			box-shadow: 0 0px 10px 0 rgba(0, 0, 0, 0.2);*/    
            background-color: transparent;
            color: white;
            border-bottom: 1px solid #fff;
		}

		.content {
			width: 70%;
			height: 50px;
			margin-top: 4%;
			padding: 10px;
			margin-left: 8%;
			resize: none;
			border-radius: 5px;
			box-shadow: 0 0px 10px 0 rgba(0, 0, 0, 0.1);
			border: none;
		}

		.smt , .smtl {
			width: 20%;
			height: 30px;
			margin-top: 6%;
			background-color: transparent;
			color: #fff;
			float: center;
			margin-right: 0%;
            font-size: 1rem;

			border: 1px solid #fff; 
            outline: none;

            text-align: center;
            line-height: 1.6;

		}


.smt a:hover{
    color: red;

    text-decoration: none;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}
.smtl a:hover{
    color: greenyellow;
/*    background: #fff;*/
    text-decoration: none;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
/*    border: 1px solid red; */
}

/*
		.smtl {
			width: 20%;
			height: 30px;
			margin-top: 4%;
			background-color: green;
			color: white;
			float: right;
			margin-right: 7%;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0px 10px 0 rgba(0, 0, 0, 0.3);
		}
*/

		a {
			color: white;
			text-decoration: none;
		}

		.feed {
			width: 100%;
			height: 60vh;
			background-color: skyblue;
		}

		.bottum {
			height: auto;
			width: 100%;
			box-shadow: 0 0px 10px 0 rgba(0, 0, 0, 0.3);
/*			background-color: darkred;*/
		}
	</style>

<body>

	<ul>

		<li onclick="window.location.href='#btm'">ABOUT US</li>
		<li onclick="window.location.href='#btm'">CONTACT</li>
		

	</ul>

	<h5 class="header"></h5>
	<div class="psubp">

		<form align="center" action="" method="POST">
            <div class="form">

			<input type="text" name="username" placeholder="Username" class="title" />
			<input type="password" name="pwd" placeholder="Password" class="title" />


			<button type="submit" class="smtl" name="login"><a>Login</a></button>
			
			</div>

		</form>
	</div>

	<center>
		<h1>
			<font color="white" class="head" style="position:absolute;
			color: white;
			left:50%;
			top:10%;
			transform:translate(-48%,-30%);"> Automated Cycle Renting System</font>
		</h1><br><br>
		<div class="bottum" id="btm" style="position:absolute;
				left:55%;
	  			top:84.5%;
	  			transform:translate(-55%,-40%);">
			<font color="white">

				<div class="about">

					<h2 class="bhead">About us </h2>

					<p>We provide cycle rental service.</p>
					<p> No tension, no queue and no waiting.</p>
					<p>The customers can contact us 24*7 with the helpline number</p>

				</div>

				<br>
				<h2 class="bhead">Contact us</h2>

				<h5 class="contactus">Thapar University , Patiala<br>Contact num:9495XXXXXX
					<br>Email id:automatedrover166@gmail.com
				</h5>
				<font color:"white"> <i>Automated Cycle Renting System</b> | All rights reserved</i></font>
		</div>

		</div>

		</head>
</body>

</html>