<?php

session_start();

if( !isset( $_SESSION['username']) ){
echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
exit();

}

require 'header.php'

?>

<body>


<nav class="navbar navbar-expand-sm bg-light mb-4">

<!-- Links -->

<ul class="navbar-nav ml-auto">

<li class="nav-item">

<a class="nav-link" href="logout.php">Logout</a>

</li>

</ul>

</nav>

<h1><i>Welcome, <?php echo $_SESSION['username'] ?></i></h1>

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.topnav {
  background-color:green;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color:red;
  color: black;
}




body
{
background-color:pink;
}
 .menu {   
float:left;
 
 width:20%;
  
text-align:center;

}
.menu a 
{
  
background-color:orange;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;

}

.main
 {
 
 float:left;
  width:60%;
  padding:0 20px;


}

.right 
{
  
background-color:#fffcfc;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;

}



@media only screen and (max-width:620px) {
 
 /* For mobile phones: */
 
 .menu, .main, .right {
   
 width:100%;
 
 }

}

h2{
text-align:center;
font-size:50px;
color:red;
}
h3{
color:black;
font-size:40px;

}

</style>

</head>

<body>

<div class="topnav">
  <a href="cmain.html">CORONA TRACKER</a>
  <a href="corona info.html">HEALTH INFORMATION</a>
  <a href="covid test.html">COVID-19 TEST</a>
  
</div>
 <h2>COVID-19</h2>


<div style="overflow:auto">
<div class="menu">

 
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR84OTVEuB6Qy-zkgA7QAdBRITTpMHw8QpCd4_398s0ABBcrzxs8woMRNAqH2PGfk20jg84GS3K8cgufDeY8uA4DZ-IkDM1T7S8lA&usqp=CAU&ec=45732301" width="300" height="300" alt="error"></img>

 <img src="https://www.brinknews.com/wp-content/uploads/2020/01/GettyImages-1196684248.jpg" alt="error" width="300" height="400"/> </div>

<body>
  
<div class="main">
 
   <p align="center" >
<marquee bgcolor="cyan" width="60%" behavior="alternate" >CORONA VIRUS</marquee>

</p>
<marquee behavior="alternate">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZGGESihStPZq_sElDai2NWDvWDkbf0u6JkA&usqp=CAU" alt="error" width="850px" height="400px"/>
  </marquee> 

   <h3>DESCRIPTION</h3>
<p>A coronavirus is a kind of common virus that causes an infection in your nose, sinuses, or upper throat. Most coronaviruses aren't dangerous.

In early 2020, after a December 2019 outbreak in China, the World Health Organization identified SARS-CoV-2 as a new type of coronavirus. The  outbreak  quickly  spread around the world.

COVID-19 is a disease caused  by SARS-CoV-2 that can trigger what doctors call a respiratory tract infection. It can affect your upper respiratory tract (sinuses, nose, and throat) or lower respiratory tract (windpipe and lungs)</p><br/>
</div>

   <div class="right">
   
 <p><img src=" https://static.toiimg.com/thumb/77994511.cms?width=680&height=512&imgsize=183072" width="255" height="300" alt="error"></img><br></br><br></br>
  
<p><img src="https://cdn.ps.emap.com/wp-content/uploads/sites/3/2020/03/coronavirus-test-1024x683.jpg" width="255" height="300" alt="error"></img></br>  

</div>
</div>
</div>
</div>


<!DOCTYPE html>  
<html>  
<head>
<div id="h"></div>
 <script>
  var v = 0, f = 1,t="COVID-19",color;
  function a()
  {
   if(f==1)
    v+=5,color="red";
   else
    v-=5,color="blue";
   document.getElementById("h").innerHTML = "<h1 style=\"font-size: "+v+"px ; margin: 0px; color : "+color+"\"><b> "+t+"</b></h1>";
   if(v==50)
    f = 0, t="COVID-19";
   if(v==5)
    f = 1, t="COVID-19";
   c();
  }
  function c()
  {
   setTimeout(a,300);
  }
  c();
 </script>
</body>
</html> 



<video width="1200" height="500" controls>
  <source src="videoplayback.mp4" type="video/mp4">
  <source src="videoplayback.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
    
     
    
 <!DOCTYPE html>

<html>


<head>

	<meta charset="utf-8">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<meta name="keywords" content="footer, address, phone, icons" />


	<title>Responsive Footer</title>

	
<link rel="stylesheet" href="/">
	

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


<head>

<style>

@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');


*{
	
padding:0;
	
margin:0;

}


html
{
	
background-color: #eaf0f2;

}


body
{
	
font:16px/1.6 Arial,  sans-serif;

}


header
{
	
text-align: center;
	padding-top: 100px;
	margin-bottom:190px;
}

header h1{
	font: normal 32px/1.5 'Open Sans', sans-serif;
	color: #3F71AE;
	padding-bottom: 16px;

}


header h2
{
	color: #F05283;

}


header span
{
	color: #3F71EA;

}



/* The footer is fixed to the bottom of the page */


footer
{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}



.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;

}


.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;

}


/* Footer left */


.footer-distributed .footer-left{
	
width: 30%;

}


.footer-distributed h3
{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;

}


/* The company logo */


.footer-distributed .footer-left img{
	width: 30%;

}


.footer-distributed h3 span{
	color:  #e0ac1c;

}


/* Footer links */


.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;

}


.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;

}



.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;

}


.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right
{
	width: 30%;

}


.footer-distributed .footer-company-about
{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;

}


.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


/* Here is the code for Responsive Footer */

/* You can remove below code if you don't want Footer to be responsive */



@media (max-width: 880px)
 {

	
.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	
}

}

</style>

</head>

	<body>
		

	
	<!-- The content of your page would go here. -->

	
	<footer class="footer-distributed">

			
<div class="footer-left">
         
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Rl-sNyBSubshvF8tOcfoAAhLZEBywlzVYQ&usqp=CAU">
		
		<h3>About<span>covid</span></h3>

				
			

<p class="footer-company-name">© 2019 Covid Solutions Pvt. Ltd.</p>
		
	</div>

			
<div class="footer-center">
	
			<div>
				
	<i class="fa fa-map-marker"></i>
			
		  <p><span>309 -JJ Nagar road,
	 Bldg. No. A - 1, Sector - 1</span>

                                                 India,Bangalore- 560075</p>
				
</div>

				
<div>
					

<i class="fa fa-phone"></i>
			
		<p>+91-11-23978046</p>
		
		</div>
				
<div>
					

<i class="fa fa-envelope"></i>
			
		<p><a href="mailto:ncov2019@gov.in">ncov2019@gov.in</a></p>
	
			</div>
		
	</div>
			
<div class="footer-right">
			
	<p class="footer-company-about">
	
				<span>About</span>
				
	For any technical enquiry with respect to COVID-19, you may kindly email on technicalquery.covid19@gov.in 
                                                                                      Aarogya Setu IVRS  1921</p>
				
<div class="footer-icons">
					
<a href="https://www.facebook.com/MoHFWIndia/posts/?ref=page_internal"><i class="fa fa-facebook"></i></a>
				
<a href="https://blog.twitter.com/en_us/topics/company/2020/covid-19.html"><i class="fa fa-twitter"></i></a>
	
<a href="https://www.instagram.com/who/?hl=en"><i class="fa fa-instagram"></i></a>
	
<a href="https://www.linkedin.com/news/story/coronavirus-official-updates-4513283/"><i class="fa fa-linkedin"></i></a>

<a href="https://www.youtube.com/watch?v=i0ZabxXmH4Y"><i class="fa fa-youtube"></i></a>
	
			</div>
		
	</div>
		
</footer>
	
</body>

</html>




