<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="index.php">
    <link rel="stylesheet" type="text/css" href="allcust.php">

	<title>Send Money</title>


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

<body style= "margin:0;">

<div id="rotate">
	<img src="images/PngItem_5146697.png" alt="" style="width:30%; margin-top:15%;margin-left:20%;">
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device.</b><br>We support only landscape mode.</h1>
</div>
 <?php include 'config.php'; ?>

<div class="container">
	<style type="text/css">
		.topnav{
	  		 overflow: hidden;
             background-color: #e3f2fd;
             position: fixed;
             top: 0;
             width: 100%;
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
		  <img src="images/logo.png"  alt="" style="height:50px;margin-left:10px;margin-top: 15px;"></a>
		  
		  	
		  	<div class="topnav-right">
		  		<a class="text-nowrap" href="index.php" style=" padding-right: 50px; text-decoration: none;">Home</a>

  <a class="text-nowrap" href="send_money.php" style= "padding-right: 50px; text-decoration: none;">Send Money</a>

  <a class="text-nowrap" href="allcust.php" style=" padding-right:50px;text-decoration: none;">View All Customers</a>

  <a class="text-nowrap" href="transactions.php" style=" padding-right: 50px; text-decoration: none;">Transactions</a>

  <a class="text-nowrap" href="contact_us.php" style="padding-right: 50px; text-decoration: none;">Contact Us</a>

  <a class="text-nowrap" href="aboutus.php" style=" padding-right: 50px;text-decoration: none;">About Us</a>
	
	</div><!---- topnav right closes here----->
	</div><!---- topnav left closes here ----->
</div><!---- topnav closes here---->
</div><!---- container fluid closes here----->


<div  class="container" style="margin-top: 5%;">

		<style type="text/css">

			.matter
			{
				width: 100%;
				height: 100%;
				background-color: white;
			}
			

		 	.matterleft
		 	{
		 	width:15%;
			margin-left: 5%;
			padding-top: 0px;
			float: left;
			margin-top: 5%;
			position: absolute;
			height: 55px; 
			}

			.matterleftdown
			input[type=text]
			 {
                 width: 100%;
                 padding: 20px 20px 20px 10px;
                  margin: 2px 0;
                  box-sizing: border-box;
                  position: relative; 
                  height: 25px; 
                  bottom: 0px; 
                  right: 0;  
                  left: 0; 	
			}
			input[type=number]
			{
				 width: 100%;
                 padding: 20px 20px 20px 10px;
                  margin: 10px 0;
                  box-sizing: border-box;
                  position: relative; 
                  height: 25px; 
                  bottom: 0px; 
                  right: 0;  
                  left: 0; 	
			}
             
           
            .formin 
             {
            border-radius: 10px;
            font-size: 15px;
            }
            
            input{
            	width: 50%;
                 padding: 5px 5px 5px 5px;

             }

            .mybtn {
            margin-bottom: 10px;
            border-radius: 20px;
            font-size: 20px;
            }
            
            .mybtn: active 
            {
            background-color: black;
            color: blue;
        }
            

        
            .matterright
            {
            	background-image: url(images/trans.jpg);
            	background-repeat:no-repeat;
            	float: right;
            	width: 50% ;
            	height:500px;
            }

		</style>
		 

		
        <div class="matter">
		 
		 <div class="matterleft">

	     
	     <h1 style=" color:blue;">

	     	<center>Transfer Money</center></h1>
             <br>
             <br>
		
		<div class="matterleftdown">
         <div  class ="" style=" backdrop-filter: blur(5px); "></div>
          <form action="send_money.php" method="post">
                	<table>
                		<tr>
                			<td>
                				<input type="text" class="formin form-control"  name="accno1" id=""
                				placeholder="Sender's Account Number"
                				  value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
                 			</td>
                 			</tr>
                 			
                 			<tr>
                 				<td>
                 					<input type="number" class="formin form-control" name="amount" id=""
                                    placeholder="Amount to Transfer"></td>
                 				</td>
                 			</tr>
                 			<tr>
                 					<td><input type="text" class="formin form-control" name="accno2" id=""
                                    placeholder="Reciever's Account Number">
                                </td>
                 			</tr>
                 			<tr>
                 				<td>
                 			<br><input class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br>
                    <p style="color:black;">Want to check your balance? check <a href="check_blc.php">here</a></p>
                    </td>
                </tr>

                 	</table>
                 	
			</form>
		</div><!--- matterleft down closes here--->
		</div><!--- matterleft  closes here--->
		
		
		<div class="matterright">
			
			
		</div>
	
	
	
	</div><!------matter closes here------>
</div>
       

</div><!----- container closes here---->

       <?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
   
    
    $checkblcquery = "SELECT blc FROM users where accno='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
</body>
</html>