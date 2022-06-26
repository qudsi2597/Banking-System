<doctype.html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

     <link rel="manifest" href="statics/site.webmanifest">
     <link rel="stylesheet" type="text/css" href="send_money.php">
     <link rel="stylesheet" type="text/css" href="allcust.php">

    
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	
	<title>Welcome to the Bank Of Sparks Foundation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	 
         <style>
         	#rotate{
         display:none;
         position: fixed;
         width: 100%;
         height: 100%;
    top: 0;
    left: 0;
    z-index: 50;
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
	  <style>

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
  		<div class="topnavleft">
    <a href="index.php"><img src="images/logo.png" alt="" style="height:50px;margin-left: 10px;margin-top:15px;"></a>
    </div>
    
    <div class="topnav-right">
   
     	 <a class="text-nowrap" href="home" style=" padding-right: 50px; text-decoration: none;">Home</a>

  <a class="text-nowrap" href="send_money.php" style= "padding-right: 50px; text-decoration: none;">Send Money</a>

  <a class="text-nowrap" href="allcust.php" style=" padding-right:50px;text-decoration: none;">View All Customers</a>

  <a class="text-nowrap" href="transactions.php" style=" padding-right: 50px; text-decoration: none;">Transactions</a>

  <a class="text-nowrap" href="contact_us.php" style="padding-right: 50px; text-decoration: none;">Contact Us</a>

  <a class="text-nowrap" href="aboutus.php" style=" padding-right: 50px;text-decoration: none;">About Us</a>
  
  </div><!--- top nav right closes here--->
 
 </div><!---top nav closes here--->
</div><!---container-fluid closes here---->
</nav>

 <div class="container-large"
  style= "width: 100% ;height:700px;background-image:url(images/bankback.jpg);background-repeat: no-repeat; background-size:cover;">
<div class="text">
	
	<style>
		.text {
  text-align: center;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%, -50%);
  color:white;
	</style>

    <h1 class="zoomfont" style="font-size:0px"><b>Welcome to <br> Sparks Foundation Bank </b></h1>
</div><!--- text div closes here --->
    
    <script>
        
        $(document).ready(function () {
            $(".zoomfont").animate({
                fontSize: '50px'
            }, '50', 'linear');
        });
    </script>        

</div><!--- container closes here --->

   <div class="container">
   	<div class="row">
                <div class="col-md-12"></div>
                <div class="section-title">
                	<style>
                		.section-title{
                		text-align:center;
                		font-size: 30px;
                		text-shadow:2px 2px 2px gray; 
                		color:white;
                        }
                	</style>
						
						<h5>About Us</h5>
							</div>
							<div >
						<h6 style="color:blue; font-size: 20px;font-family: Arial;"><center>Sparks Bank is a Web Application used to transfer money between multiple users</center></h6></div>
   
  
   <center style="margin:40px 0px 20px 0px;">
    <div class="container" style="box-shadow:0px 0px 0px lightgrey; border-radius:0px; 
    padding:20px 20px 20px 20px;">

     <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Awesome Facilities</b></h1>

    
     
   <div class="container" style="margin:10px 0px 10px 0px;">
     	                <div class="row">
     	                	 <div class="column">
     	                	 	<style>
     	                	 		.column {
                                      float: left;
                                      width: 25%;
                                      margin-left: 70px;
                                      margin-top: 10px;
                                     padding: 25px;
                                     height: 300px
     	                	 	</style>
                        <div
                            style="background-color:#5DADE2; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:40px 10px 30px 10px;">
                            
                            <i class="fa-solid fa-users" style="font-size:75px;"></i><br><br>
                           
                            <a href="allcust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h4>Here, you can watch every customer of the bank.</h4>
                        
                        </div>
                    </div><!--- col-lg closes here--->

                     <div class="column">
                        <div
                            style="background-color:#5DADE2; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x" style="font-size:100px"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h4>Here, you can send money from your account.</h4>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div
                            style="background-color:#5DADE2; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x" style="font-size:100px"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h4>Here, you can check the remaining balance in your account.</h4>
                        </div>

                    </div><!---row closes here --->





 </div><!--- second container closes here--->

<div clas="container" style="margin:10px 0px 10px 0px;">

</div>
</body>
</html>