<doctype.html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="index.php">
     <link rel="stylesheet" type="text/css" href="send_money.php">
   

		<title>All Customers</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<style>
	#rotate{
         display:none;
         position: fixed;
         width: 100%;
         height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(255,255,255) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    
    </style>
	</head>

	<body style="margin:0;">
		<div id="rotate">
	<img src="images/PngItem_5146697.png" alt="" style="width:30%; margin-top:15%;margin-left:20%;">
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device.</b><br>We support only landscape mode.</h1>
</div>
  

<div class="container">
	<style type="text/css">
		.topnav{
	  		 overflow: hidden;
             background-color: #e3f2fd;
             position: fixed;
             width: 100%;
             top: 0;
	  	}
	  	
	  	.topnavleft 
	  	{
        width: 100%;
    }
        .topnavleft a
        {
       float: left;
        }
        
        
        .topnav-right 
        {
         float:right;
         color: blue;
         font-size: 20px;
         padding-top:25px; 
        padding-bottom:15px;
        }
        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }
    </style>
	



<div class="container-fluid">
	<div class="topnav">
		  <div class="topnav-left">
		  	<a href="index.php"><img src="images/logo.png"  alt="" style="height:50px;margin-left:10px;margin-top: 15px;"></a>
		  
		  	
		  	<div class="topnav-right">
		  		<a class="text-nowrap" href="index.php" style=" padding-right: 50px; text-decoration: none;">Home</a>

  <a class="text-nowrap" href="send_money.php" style= "padding-right: 50px; text-decoration: none;">Send Money</a>

  <a class="text-nowrap" href="allcust.php" style=" padding-right:50px;text-decoration: none;">View All Customers</a>

  <a class="text-nowrap" href="transactions.php" style=" padding-right: 50px; text-decoration: none;">Transactions</a>


  <a class="text-nowrap" href="contact_us.php" style="padding-right: 50px; text-decoration: none;">Contact Us</a>

  <a class="text-nowrap" href="about_us.php" style=" padding-right: 50px;text-decoration: none;">About Us</a>
	
	</div><!---- topnav right closes here----->
	</div><!---- topnav left closes here ----->
</div><!---- topnav closes here---->
</div><!---- container fluid closes here----->
</div><!----container closes here----->

<style type="text/css">
           
           .formin 
             {
            border-radius: 20px;
            font-size: 20px;
            }
            
            input{
                width: 50%;
                 padding: 5px 5px 5px 5px;

             }

            .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 20px;
            font-size: 20px;
            }
            
            .mybtn: active 
            {
            background-color: black;
            color: blue;
        }
            

            </style>

<div  class="container" style="margin-top: 5%;">
<?php include 'config.php'; ?>
    <div class="matter">
        <center><h1 style="color:blue;">Check Balance</h1></center>
 </div>
 <div class="container" style="margin-top:50px; margin-left:40%;width:40%">
            
                <form action="check_blc.php" method="post">
                    <input type="text" class="formin form-control" name="accno" id="" placeholder="Account Number"><br>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Submit"><br><br>
                    <p style="color:black;">Don't remember your account number? check <a href="allcust.php">here</a>
                    </p>
                </form>
            </div>
</div>
<?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT blc FROM users where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
         <h2> <center><i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($result)['blc'].'</center></h2></div>';
    }else{
        echo '<div class="alert alert-danger align-items-center text-center" style="width:34%;" role="alert">
        <div><h2>
        <i class="fas fa-times-circle"></i>
        Something went wrong!</h2>
        </div>
      </div>';
    }
}
}


?>
</body>
</html>