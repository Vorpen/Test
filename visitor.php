<!DOCTYPE html>
<html>
<head>

	<link href="css/style1.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
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

<div id="Container_register">
			<a href="#" id="btn1" class="visitor" name="visitor_btn"> <span>Visitor</span></a><br>
						<div class="title"><h1>Show Me</h1></div>
				<form method="POST" action="script/register.php" enctype="multipart/form-data">
			
				<input type="text" name="username" placeholder="Username">
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="repeat" placeholder="Repeat password">
				<input type="submit" name="btn_visitor" value="Next" class="next">
				<br>

					
					
</div>

<footer>
		<div id="foot">
		
			<p>Copyright &copy 2018. Show me, Sva prava pridržana.</p>
			
		</div>


</footer>









</body>

</html>
