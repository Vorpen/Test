<!DOCTYPE html>
<html>
<head>

	<link href="css/style1.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="zavrsni.js"></script>
	<script src="zavrsni/js/jquery-1.11.0.min"></script>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		
	
	
	
	
	
	</script>

<style>

input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}
#edit-button{

                     
display: inline-block;
border-radius: 4px;
background-color:#e68a00;
border: none;
color: white;
text-align: center;
font-size: 1.5em;
padding:5px;

width: 320px;
height:40px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
opacity:1;
transition-duration:500ms;
transition-property:opacity;
transition-timing-function:ease-in;
margin: auto 0 ;
margin-top:60px;



}

</style>

</head>
<body>



<div id="Container_register">
		
			
			<a href="#" id="btn2" class="designer" name="designer_btn"> <span>Designer</span></a>
						<div class="title"><h1>Show Me</h1></div>
			
				
						<form  method="POST" action="script/register.php" enctype="multipart/form-data">
							<input type="text" name="username" placeholder="Username">
								<input type="email" name="email" placeholder="Email">
								<input type="password" name="password" id="pass1" placeholder="Password">
										<input type="password"  id="pass2" placeholder="Repeat password">
											<input type="text" name="ime" placeholder="First name">
												<input type="text" name="prez" placeholder="Last name">
														<input type="text" name="mobitel" placeholder="Broj mobitela">
															<input type="text" name="oib" placeholder="OIB">
																<input type="submit" name="btn_register" value="Next" id="edit-button" class="next">
																
					</form>
</div>

<footer>
		<div id="foot">
		
			<p>Copyright &copy 2018. Show.com.hr. Sva prava pridržana.</p>
			
		</div>


</footer>









</body>

</html>
