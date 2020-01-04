<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	
<title>Login</title>
</head>


<style>

.next {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 10px;
  width: 80%;
  height: 40px;
  
  background-color: #333333;
  border-radius: 10px;
	margin: 0 auto;
  font-family: Poppins-Medium;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}

.next::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  top: 0;
  left: 0;
  background: #a64bf4;
  background: -webkit-linear-gradient(45deg, orange, #e6e6e6 );
  background: -o-linear-gradient(45deg, orange, #e6e6e6);
  background: -moz-linear-gradient(45deg, orange, #e6e6e6);
  background: linear-gradient(45deg, orange, #e6e6e6);
  opacity: 0;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.next:hover:before {
  opacity: 1;
}

form{
	
	text-align:center;
	margin-top:50%;
	
}

	</style>
<body>







	<div class="Container_login">
			
			<form method="POST" action="index.php" >
				<div class="title"><h1>Show Me</h1></div>
				<input type="text" name="username" placeholder="Username">
				
				<input type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="btn_login" value="Login" class="next">
				<a href="#">Imate li problema pri ulogiravanju?</a>
				<a href="choose.php" name="register" class="next">Register</a>
			</form>
		</div>







</body>

















</html>
