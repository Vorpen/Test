

<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
</head>
<style>







/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: JosefinSans-Bold;
  src: url('../fonts/JosefinSans/JosefinSans-Bold.ttf'); 
}

@font-face {
  font-family: Oswald-Medium;
  src: url('../fonts/oswald/Oswald-Medium.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: JosefinSans-Bold, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: JosefinSans-Bold;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: JosefinSans-Bold;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}




/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
  width:400px;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}




/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;


  justify-content: center;
  align-items: center;
  padding: 15px;
  margin-top:-10px;
  
  margin: 0 auto;
  text-align:center;
 
}



.contact100-map {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.wrap-contact100 {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 62px 55px 65px 55px;
  margin: 0 auto;
  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}


/*==================================================================
[ Form ]*/

.contact100-form {
  width: 100%;
}

.contact100-form-title {
  display: block;
  font-family: JosefinSans-Bold;
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 30px;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  
  background-color: #fff;
  border: 1px solid #e6e6e6;
  margin-bottom: 17px;

  padding:0;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: JosefinSans-Bold;
  font-size: 15px;
  color: #1b3815;
  line-height: 1.2;
}


/*---------------------------------------------*/
input.input100 {
  height: 62px;
  padding: 0 20px 0 23px;
}


textarea.input100 {
  min-height: 199px;
  padding-right: 10px;
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100-1, 
.focus-input100-2 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100-1::before,
.focus-input100-2::before {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 1px;
  background-color: orange;
}

.focus-input100-1::before {
  top: -1px;
  left: 0;
}

.focus-input100-2::before {
  bottom: -1px;
  right: 0;
}

.focus-input100-1::after,
.focus-input100-2::after {
  content: "";
  display: block;
  position: absolute;
  width: 1px;
  height: 0;
  background-color: orange;
}

.focus-input100-1::after {
  top: 0;
  right: -1px;
}

.focus-input100-2::after {
  bottom: 0;
  left: -1px;
}

.input100:focus + .focus-input100-1::before {
  -webkit-animation: full-w 0.2s linear 0s;
  animation: full-w 0.2s linear 0s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1::after {
  -webkit-animation: full-h 0.1s linear 0.2s;
  animation: full-h 0.1s linear 0.2s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::before {
  -webkit-animation: full-w 0.2s linear 0.3s;
  animation: full-w 0.2s linear 0.3s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::after {
  -webkit-animation: full-h 0.1s linear 0.5s;
  animation: full-h 0.1s linear 0.5s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}


@keyframes full-w {
  to {
    width: calc(100% + 1px);
  }
}

@keyframes full-h {
  to {
    height: calc(100% + 1px);
  }
}


/*==================================================================
[ Restyle Checkbox ]*/

.contact100-form-checkbox {
  padding-top: 12px;
  padding-bottom: 28px;
}

.input-checkbox100 {
  display: none;
}

.label-checkbox100 {
  display: inline-block;
  position: relative;
  padding-left: 32px;
  cursor: pointer;
  font-family: Oswald-Medium;
  font-size: 15px;
  color: orange;
  line-height: 1.2;
  margin: 0;
}

.label-checkbox100::before {
  content: "\f00c";
  font-family: FontAwesome;
  font-size: 15px;
  color: transparent;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 22px;
  height: 22px;
  border: 1px solid #e6e6e6;
  background: #fff;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.input-checkbox100:checked + .label-checkbox100::before {
  color: #57b846;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  padding-top: 13px;
}





  textarea {

    margin: 0 auto;
  }

.contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 42px;
  background-color: orange;
  margin: 0 auto;
  font-family: JosefinSans-Bold;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  padding-top: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


div#google_map.contact100-map {


  background-color:none;
}


.contact100-form-btn:hover {
  background-color: #ffad33;
}



/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-contact100 {
    padding:10px;
  }
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 2px;
  pointer-events: none;

  font-family: JosefinSans-Bold;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}




</style>


<body>

<?php



  
    

echo'
<div class="container-contact100">
	

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="form.php" enctype="multipart/form-data" >
		

        <div class="wrap-input100 validate-input" data-validate = >
        <input class="input100" type="text" name="firstname" placeholder="firstname">
        <span class="focus-input100-1"></span>
        <span class="focus-input100-2"></span>
      </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" type="text" name="lastname" placeholder="Lastname">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

      	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" type="text" name="position" placeholder="Company&position">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
        </div>
        
        <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="number" placeholder="Number">
        <span class="focus-input100-1"></span>
        <span class="focus-input100-2"></span>
      </div>

      <div class="wrap-input100 validate-input" data-validate="Name is required">
      <input class="input100" type="file" name="datoteka" value="Uploud>
      <span class="focus-input100-1"></span>
      <span class="focus-input100-2"></span>
    </div>

      

				<div class="container-contact100-form-btn">
     <input class="input100" type="submit" name="btn_postavi" value="posalji">
				</div>
			</form>
		</div>
	</div>
';





echo'

</body>



';




?>