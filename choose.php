
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
  width: 300px;
  height: 40px;
  margin:0 auto;
	margin-top:40px;
  background-color: #333333;
  border-radius: 10px;
	
  
  font-family: Poppins-Medium;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;
transition-duration: 500ms;
transition-property:opacity;
transition-timing-function:ease-in;
opacity:1;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  
}

.next:hover{

opacity:0.85;

}
.next:hover:before {
  opacity: 1;
}


	</style>
<body>

		
<div id="container">


					<div class="title"><h1>Choose</h1></div>
	
			<a href="visitor.php" id="btn1" class="visitor" name="visitor_btn"> <span>Visitor</span></a><br>
			<h1 class="or">Or</h2>
	
			<a href="designer.php" id="btn2" class="designer" name="designer_btn"> <span>Designer</span></a>
			<form method="POST" action="login.php" class="forr">
			<input type="submit" name="btn_login" value="Login" class="next">
			</form>	
</div>











</body>

</html>
