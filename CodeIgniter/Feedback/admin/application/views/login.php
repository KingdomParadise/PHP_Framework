<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
	<meta name="author" content="leamug">
	<title>Feedback Admin Login</title>
	<link href="../../admin/assets/css/style.css" rel="stylesheet" id="style">
	<!-- Bootstrap core Library -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<!-- Font Awesome-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<style>
		/*author:starttemplate*/
		/*reference site : starttemplate.com*/
		body {
			background-image: url('https://i.redd.it/o8dlfk93azs31.jpg');
			background-position: center;
			background-size: cover;

			-webkit-font-smoothing: antialiased;
			font: normal 14px Roboto, arial, sans-serif;
			font-family: 'Dancing Script', cursive !important;
		}

		.container {
			padding: 110px;
		}

		::placeholder {
			/* Chrome, Firefox, Opera, Safari 10.1+ */
			color: #ffffff !important;
			opacity: 1;
			/* Firefox */
			font-size: 18px !important;
		}

		.form-login {
			background-color: rgba(0, 0, 0, 0.55);
			padding-top: 10px;
			padding-bottom: 20px;
			padding-left: 20px;
			padding-right: 20px;
			border-radius: 15px;
			border-color: #d2d2d2;
			border-width: 5px;
			color: white;
			box-shadow: 0 1px 0 #cfcfcf;
		}

		.form-control {
			background: transparent !important;
			color: white !important;
			font-size: 18px !important;
		}

		h1 {
			color: white !important;
		}

		h4 {
			border: 0 solid #fff;
			border-bottom-width: 1px;
			padding-bottom: 10px;
			text-align: center;
		}

		.form-control {
			border-radius: 10px;
		}

		.text-white {
			color: white !important;
		}

		.wrapper {
			text-align: center;
		}

		.footer p {
			font-size: 18px;
		}

		.login-form {
			margin-left: 33.3%;
		}
	</style>
</head>

<body>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-offset-5 col-md-4 text-center login-form">
				<h1 class='text-white'>Admin Login Form</h1>
				<div class="form-login"></br>
					<h4>Secure Login</h4>
					</br>
					<input type="text" id="username" name="username" class="form-control input-sm chat-input" placeholder="Admin Emain" />
					</br></br>
					<input type="password" id="userpwd" name="userpwd" class="form-control input-sm chat-input" placeholder="Password" />
					</br></br>
					<div class="wrapper">
						<span class="group-btn">
							<button class="btn btn-danger btn-md" onclick="login_func()" id="login" name="login">Login <i class="fa fa-sign-in"></i></button>
						</span>
					</div>
				</div>
			</div>
		</div>
		</br></br></br>
		<!--footer-->
		<div class="footer text-white text-center">
			<p>© 2021 Feedback Admin Login Form. All rights reserved | Design by <a href="#">Anton</a></p>
		</div>
		<!--//footer-->
	</div>
</body>

<script>
	function login_func() {
		let name = $('#username').val();
		let pwd = $('#userpwd').val();
		if (name == '') {
			alert('Please input Admin ID!');
			return;
		}

		if (pwd == '') {
			alert('Please input Admin password');
			return;
		}

		if (name != 'admin@admin.com') {
			alert('Please input correct Admin ID');
			return;
		}

		if (pwd != '12345678') {
			alert('Please input correct Admin password');
			return;
		}

		$.ajax({

			url: 'auth/admin_login',
			type: 'post',
			data: {
				'name': name,
				'pwd': pwd
			},
			dataType: 'json',
			success: function(data) {
				if (data.state === "fail") {
					alert(data.message);
				} else {
					alert(data.message);
					location.href = "dashboard";
				}
			},
			error: function(request, error) {
				alert("Ajax Error!!!");
			}
		});
	}
</script>

</html>