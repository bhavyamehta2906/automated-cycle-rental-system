<?php
include('dbconnect.php');

?>


<html>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style>
body
{
/*    overflow-y: hidden;*/
background-color: black;
    overflow-y: hidden;
}
.logoutLblPos
{
position:fixed;
right:10px;
top:20px;
width:15px;
left:1400px;
color: white;
background-color: black;
    
}

    .logoutLblPos :hover{
        color: red;
    }    
    
.column 
{
float: left;
width: 46%;
padding: 30px 0;
            /*width: 20%;*/
/*			height: 15%;*/
/*			margin-left: 38%;*/
/*			margin-top: 10%;*/
			border-radius: 8px;
/*			box-shadow: 0 0px 20px 10px rgb(254,254,254);*/
            background: #000;
/*			float: left;*/
/*			padding-bottom: 5%;*/
/*            padding-top: 2%;*/
/*            padding-left: 2%;*/
/*            padding-right: 2%;*/
            position: relative;
}
    
    
    
    .column:before, .column:after{
             z-index: -1;
  content: '';
  position: absolute;
  width: calc(100% + 6px);
  height: calc(100% + 6px);
  top: -2px;
  left: -2px;
  background: linear-gradient(45deg, #f8accb, #80aeda,#79e69c,
              #ff9797,#e6f169,#fc0090,#d1cdea,#6ee2c6,#e7f356);
  background-size: 300%;
  animation: shadow 20s linear infinite;
        }
    
            .column:after{
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

    
.row::after
{
content: "";
clear: both;
display: table;
/*    column-gap: 400px;*/
}
.ul
{
float: right;
margin-right: 50px;	

}
.ul li
{
display: inline-block;
padding: 10px;
margin-top: 12px;
cursor: pointer;
font-family:sans-serif;
color: white;
}
    .h33{
        align-content: center;
    }
    .h33:hover{
        color: darkorchid;
    }
    
    .column1{
/*
        margin-right: 30px;
        padding-right: 30px;
*/
    }
    
</style>
<head>
	<title>AUTOMATED CYCLE RENTING SYSTEM</title>	  
	 </head>
	 <body>
	 <form align="right" name="form1" method="post" action="index.php">
	 <label class="logoutLblPos">
	 <input name="submit2" type="submit" id="submit2" value="LOG OUT">
	 </label>
	 </form>
	  <center>
		 <h1>
		     		<font color="#fff"><br><br> AUTOMATED CYCLE RENTING SERVICE </font>
		</h1>

<marquee>
<h3 style="color: #fff;">
***SWITCH TO CYCLES........SAVE FUEL.......SAVE ENVIRONMENT***
</h3>
</marquee>
<div class="row">
<div class="column" style="margin-left:20px;">
 <div class="column1" style="margin-left:0px;">					
  <a href="area1.php" class="area1">
  <img src="images/WhatsApp%20Image%202021-06-01%20at%2014.16.56.jpeg" alt="AREA 1" height="400px" width="500px">
	<h3 style="color:white; align-content:center;" class="h33">STATION 1-COS</h3>
    </a>
  </div>
</div>


<div class="column" style="margin-left:80px;">
<a href="area2.php">
  <img src="images/WhatsApp%20Image%202021-06-01%20at%2014.18.02.jpeg" alt="AREA 2" height="400px" width="500px">
	<h3 style="color:white;" class="h33"><right> STATION 2- LIBRARY </right></h3>
</a>
</div>
    </div>
<center>
<div class="fo" style="color:#fff;"><i><b><br>AUTOMATED CYCLE RENTING SYSTEM</b>    |    All rights reserved</i> </div>
          </center>
 </center>
   
    </body>

    </html>
    	 



</body>
</html>