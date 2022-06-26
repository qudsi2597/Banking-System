<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="index.php">
    <link rel="stylesheet" type="text/css" href="allcust.php">
   

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
    <?php include 'config.php'; ?>
	
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
</div>
<?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>

<div class="container" style="margin-top:10%;">
   <style type="text/css">
    
.content
{
display: flex;
  align-items: center;
  justify-content: space-between;
  background-color:white;

}
.left-side
{
  width: 15%;
  height: 100%;
  display: flex;
  flex-direction:column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.details{
margin-top: 5px;
  margin-left: 15px;
  text-align: center;

}
i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.topic{
  font-size: 18px;
  font-weight: 500;
}
.text-one{
    font-size: 14px;
  color: #afafb6;
}
.text-two
{
    font-size: 14px;
  color: #afafb6;
}

.right-side{
  width: 85%;
  margin-left: 75px;
}
.topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
input{
  height: 100%;
  width: 90%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
textarea{
height: 100%;
  width: 95%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
  }  

.message-box{
  min-height: 110px;
}
.input-box textarea{
  padding-top: 6px;
}
.button{
  display: inline-block;
  margin-top: 12px;

}
input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
 

</style>
  
   <div class="container">
    <div class="content">
      
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Andheri (w)</div>
        </div>
        
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">sparksbank@gmail.com</div>
          <div class="text-two">sparksbank@gmail.com</div>
        </div>
     
      </div>
      
      <div class="right-side">
            <?php include 'config.php';?>
        
        <div class="topic-text">Send us a message</div>
      
      <form action="contact_us.php" method="post">
        
        <div class="input-box">
          <input type="text"  name="name" id="" placeholder="Enter your name">
        </div>
        
        <div class="input-box">
          <input type="email" name="email" id="" placeholder="Enter your email">
        </div>
        
        <div class="input-box message-box">
          <textarea name="message" class="" placeholder="Enter your message"></textarea>
        </div>
        
        <div class="button">
          <input type="submit" value="Submit">
        
        </div>
      </form>
    
    </div>
    
    </div>
  </div>

 
</body>
</html> 