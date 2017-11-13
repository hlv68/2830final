<?php
session_start() ;                  
if (isset ($_SESSION['user']))
{
	header ("Location:index.php") ;    
	exit ;
}
?>
<!doctype html>  
<html>  
<head lang="zh-CN">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- Make sure that we can test against real IE8 --> 
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<title>register</title> 
<script>
    function checkform(){
	    var username = $("#username").val();
		var password = $("#password").val();
		var password_cf = $("#password_cf").val();
		if(username.length == 0 || password.length == 0 || password_cf.length == 0){
		    alert("username or password is null");
			return false;
		}
		
		if(password != password_cf){
		    alert("two passwords are not consistent");
			return false;		
		}
		return true;
	}
</script>
</head> 
<body> 
<div class="content">

<form name="login" method="post" action="checkregister.php">
<div class="panel"><div class="group"> <label>username</label> <input placeholder="please input username" name="username" id="username"> </div><div class="group"> <label>password</label> <input placeholder="please input password" type="password" name="password" id="password"></div><div class="group"> <label>repassword</label> <input placeholder="please reinput password" type="password" name="password_cf" id="password_cf"></div><div class="login"> <button onclick="return checkform()" type="submit">register</button></div>
</div>


<div class="register"><a href="login.php"><button form="test">Login</button></a>
</div>

</form>

</div>

</body>  
</html>