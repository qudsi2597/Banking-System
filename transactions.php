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
        <?php include 'config.php'; ?>

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

  <a class="text-nowrap" href="aboutus.php" style=" padding-right: 50px;text-decoration: none;">About Us</a>
	
	</div><!---- topnav right closes here----->
	</div><!---- topnav left closes here ----->
</div><!---- topnav closes here---->
</div><!---- container fluid closes here----->
</div><!----container closes here----->

<div  class="container" style="margin-top: 5%;">
 
 <div class="matter">
<center><h1 style="color:blue;">All Customers</h1></center>
         
<style type="text/css">
 table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 0px solid rgb(0, 0, 0);
   }
   th{
      text-align: center;
      padding-left: 10px;
   }
   tbody
   {
   text-align: center;
   }
</style>


    
 </div>
 <?php

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>           
 
               <table style="margin-top:0px;">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Reciver</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>


 
          
                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            { 
            echo    '
            <center>
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
              <?php echo '</td>
              </tr>
              </center>';}
    }
    
    }
    echo "</tbody>";
?>
</body>
</html>