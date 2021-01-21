<?php
require 'header.php';
require 'db_key.php';
?>
<style>
h1{
text-align:center;
font-size:75px;
color:red;
}
h2{
text-align:center;
font-size:50px;
color:black;
}
body
{

background-image:url("https://m.economictimes.com/thumb/msid-76340801,width-1200,height-900,resizemode-4,imgsize-389237/coronavirus-vaccine-antibodies1_istock.jpg");
background-repeat:no repeat;
background-size:100%;
}
</style>
<body>
<div class = 'container'>
<div>
<div><h1>COVID-19 TRACKER</h1>
<div><h2>LOGIN PAGE</h2></div>
</div>
<form method = 'POST' action = 'backend.php'align="center">
<div class="form-group" align="center">
<label>Username  </label>
<input class= 'form-control w-25' type="text" name="username">
<label>Password </label>
<input class= 'form-control w-25' type="password" name="password" id="password" autocomplete="off">
</div>
<button class = 'btn btn-outline-info' type="submit" name="login" value= 'login' class="submit">Login</button>
</form>
<div id="footer-box">
<p align="center">Not a member? <a href="/register.php" class="sign-up">Sign up now</a></p>
</div>
</div>
</body>
</html>