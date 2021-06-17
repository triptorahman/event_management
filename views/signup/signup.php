<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign Up</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #344a71;
	font-family: 'Roboto', sans-serif;
}
.form-control {		
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e4e5;
}
.form-control:focus {
	border-color: #49c1a2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form form {
	color: #9ba5a8;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 14px;
}
.signup-form .btn, .signup-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #49c1a2 !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #3cb094 !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #49c1a2;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
</style>

</head>
<body>
<div class="signup-form">
    <form action="controller/signup_controller.php" name="signup1" id="signup1" method="post">
		<h2>Sign Up</h2>
		
		<hr>
        <div class="form-group">
			<label class="text-dark font-weight-bold">First Name</label>
        	<input type="text" class="form-control" id="first_name" name="first_name" >
        </div>
        <div class="text-danger" id="error1" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">Last Name</label>
        	<input type="text" class="form-control" id="last_name" name="last_name" >
        </div>
        <div class="text-danger" id="error2" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">User Name</label>
        	<input type="text" class="form-control" id="user_name" name="user_name" >
        </div>
        <div class="text-danger" id="error3" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">Email Address</label>
        	<input type="email" class="form-control" id="email" name="email" >
        </div>
        <div class="text-danger" id="error4" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="text-danger" id="error5" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">Date Of Birth</label>
        	<input class="form-control" id="dob" name="dob" placeholder="DD.MM.YYYY" type="Date" />
        	
        </div>
        <div class="text-danger" id="error6" hidden=""></div>

		<div class="form-group">
			<label class="text-dark font-weight-bold">Address</label>
        	<input type="text" class="form-control" id="address" name="address" >
        </div>
        <div class="text-danger" id="error7" hidden=""></div>
        <div class="form-group">
			<label class="text-dark font-weight-bold">Contact</label>
        	<input type="text" class="form-control" id="contact" name="contact" >
        </div>
        <div class="text-danger" id="error8" hidden=""></div>
		
		<div class="form-group">
            <input type="hidden" id="checkuser" name="checkuser">
            <input type="submit" class="btn btn-primary btn-block btn-lg" name="signup" value="Sign Up" />
        </div>
		<div class="text-center">Already have an account? <a href="index.php?page=Login">Login here</a></div>
    </form>
	
</div>
</body>
</html>

<script>
	$("form").submit(function(){



		$("#error1").attr("hidden",true);
		$('#error1').html('');
		$("#error2").attr("hidden",true);
		$('#error2').html('');
		$("#error3").attr("hidden",true);
		$('#error3').html('');
		$("#error4").attr("hidden",true);
		$('#error4').html('');
		$("#error5").attr("hidden",true);
		$('#error5').html('');
		$("#error6").attr("hidden",true);
		$('#error6').html('');
		$("#error7").attr("hidden",true);
		$('#error7').html('');

	/*Front Side Validation*/
		
		var first_name=$('#first_name').val();
		if(first_name==''){
			$('#error1').removeAttr('hidden');
			$('#error1').html('Need First Name');
			return false;
		}else if(first_name.length<3){

			$('#error1').removeAttr('hidden');
			$('#error1').html('First Name need to be more than 3 letters');
			return false;

		}


		var last_name=$('#last_name').val();
		if(last_name==''){
			$('#error2').removeAttr('hidden');
			$('#error2').html('Need Last Name');
			return false;
		}else if(last_name.length<3){

			$('#error2').removeAttr('hidden');
			$('#error2').html('Last Name need to be more than 3 letters');
			return false;

		}


		var user_name=$('#user_name').val();
		if(user_name==''){
			$('#error3').removeAttr('hidden');
			$('#error3').html('Need User Name');
			return false;
		}else if(user_name.length<3){

			$('#error3').removeAttr('hidden');
			$('#error3').html('User Name need to be more than 3 letters');
			return false;

		}


		var email=$('#email').val();
		if(email==''){
			$('#error4').removeAttr('hidden');
			$('#error4').html('Need Email');
			return false;
		}else if(email.indexOf(".")<9 || email.indexOf("@")<2 || email.indexOf(".")<email.indexOf("@")){

			$('#error4').removeAttr('hidden');
			$('#error4').html('Invalid Email');
			return false;

		}


		var password=$('#password').val();
		if(password==''){
			$('#error5').removeAttr('hidden');
			$('#error5').html('Need password');
			return false;
		}else if(password.length<5){

			$('#error5').removeAttr('hidden');
			$('#error5').html('Password need atleast 5 leters');
			return false;

		}

		var dob=$('#dob').val();
		if(dob==''){
			$('#error6').removeAttr('hidden');
			$('#error6').html('Need DOB');
			return false;
		}


		var contact=$('#contact').val();
		if(contact==''){
			$('#error8').removeAttr('hidden');
			$('#error8').html('Need Contact');
			return false;
		}else if(contact.length<11){

			$('#error8').removeAttr('hidden');
			$('#error8').html('Contact need to be 11 numbers');
			return false;

		}else if(contact.length>11){

			$('#error8').removeAttr('hidden');
			$('#error8').html('Contact need to be 11 numbers');
			return false;

		}

});


	$('#user_name').keyup(function(){
	
	var user_name = $(this).val();
	$("#error3").attr("hidden",true);
		$('#error3').html('');
	
	if(user_name) {
		$.getJSON('get_ajax_file.php', {user_name: $(this).val()}, function(data){
			
			
		if(data>0){

		$('#error3').removeAttr('hidden');
		$('#error3').html('user name exist');

	}
			
			
		});
			
	}

	
	
});

	$('#email').keyup(function(){
	
	var email = $(this).val();
	$("#error4").attr("hidden",true);
		$('#error4').html('');
	
	if(email) {
		$.getJSON('get_ajax_file.php', {email: $(this).val()}, function(data){
			
			
		if(data>0){

		$('#error4').removeAttr('hidden');
		$('#error4').html('Email Already exist');

	}
			
			
		});
			
	}

	
	
});
</script>