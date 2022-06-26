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
</div>

   <div class="container" style="margin-top: 5%; padding:10px 80px 10px 80px; ">
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
            margin-left: 10%;
            padding-top: 0px;
            float: left;
            margin-top: 2%;
            position: absolute;
            height: 35px; 
            }
            
             .matterright
            {
                float:right;
                 margin-top: 2%;
                margin-right: 10%;
            }
        </style>
            
            <div class="matter">
               <center> <div style="width:60%;padding:5px 5px 5px 5px;">
                <h1 style=" color:blue;">About Us</h1>
            </div>
            
            <div class="matterleft">
                
            <h2 style="color:blue;">This website is created by</h2>
            <h1 style="color:blue;">Qudsia Rakhange</h1>
            <p style="color:blue;"><b>Intern at Sparks Foundation <br>Valia College of Commerce Arts and Science</b></p>
        </div>
   

<div class="matterright">
    
    <h1 style="color:blue;">Our Vision Statement</h1>
    <p style="color:blue">
A world of enabled and connected little minds, building future.
</p>

<h1 style="color: blue">Our Mission Statement</h1>

<p style="color:blue">
    To inspire students, help them innovate and let them integrate to build the next generation humankind.
</p>

</div>
</div>
 
</body>

</html>