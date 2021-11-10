<?php
include('dbconnect.php');
session_start();
$Nam=$_SESSION['va'];
$Balance=$_SESSION['var'];
$rfid = $_SESSION['varname'];
$Slotno=$_SESSION['varna'];
$statusslot=$_SESSION['varnam'];
function update1()
{
$id=$_SESSION['va'];
$Station_no=1;
$Slot_no = 2;
$Balance=$Balance-5;
$status = 1;
if($Balance==0){
	echo "no balance";
}
$sql="UPDATE cycle1 set `Balance`=". $Balance ." WHERE `username`='$id'";
mysqli_query($con_key, $sql);

$sql="UPDATE cycle1 set `Station_No`=". $Station_no ." WHERE `username`='$id'";
mysqli_query($con_key, $sql);
$sql="UPDATE cycle1 set `Slot_No`=". $Slot_no ." WHERE `username`='$id'";
mysqli_query($con_key, $sql);
$sql="UPDATE cycle1 set `status`=". $status ." WHERE `username`='$id'";
mysqli_query($con_key, $sql);
echo "hi";
}
?>
<html>
<body>
<style>
#av1 {
	width: 100px;
	height: 20px;
	color: white;
}
#av2 {
	width: 100px;
	height: 20px;
	color: white;
}
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  color:"red";
  background-color: black;
	background-size: cover;
  background-repeat: repeat-x repeat-y;
}
.header {
  grid-area: header;
  padding: 30px;
  text-align: center;
  font-size: 30px;
}
.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left left middle middle right right' 
    'footer footer footer footer footer footer';
  grid-column-gap: 30px;
} 
.left,
.middle,
.right {
  width:500px;
  height: 250px; 
  box-shadow:5px 10px 10px 5px rgba(0.8,0.8,0.8,0.8);
}
.middle {
  margin-right: 300px;
  margin-left: 480px;
  margin-top:150px;

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
    
            .middle:before, .middle:after{
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
        
        .middle:after{
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
@media (max-width: 500px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}
</style>
<div class="grid-container">
<div class="header">
<div id="av1">
<div class="middle">
		<form>
		<h5>Name    :<input type="button" id="username"  value="<?php echo $Nam; ?>" /></h5>
		<h5>Balance :<input type="button" id="balance"  value="<?php echo $Balance; ?>" /></h5>
		<h5>  RFID    :<input type="button" id="rfid"  value="<?php echo $rfid; ?>" />
		</form>
<br><br><h6> Successful</h6>
</body>
</html>