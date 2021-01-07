<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
	/*bootstrap class override for login page only*/
	.form-control {
		border-radius: 0px;
		margin: 12px 3px;
		height: 40px;
	}

	.logo {
		margin: auto;
		text-align: center;
		padding-top: 20%;
	}

	.logo img {
		height: 70px;
	}

	/*footer*/
	.footer a {
		color: #000;
		text-decoration: none;
	}

	.footer {
		color: #000;
		text-align: center;
	}

	/*footer end*/


	/*for logintemplate blue*/
	.grayBody {
		background-color: #E9E9E9;
	}

	.loginbox {
		margin-top: 5%;
		border-top: 6px solid #8B1F1F;
		background-color: #fff;
		padding: 20px;
		box-shadow: 0 10px 10px -2px rgba(0, 0, 0, 0.12), 0 -2px 10px -2px rgba(0, 0, 0, 0.12);
	}

	.singtext {
		font-size: 28px;
		color: #8B1F1F;
		font-weight: 500;
		letter-spacing: 1px;
	}

	.submitButton {
		background-color: #8B1F1F;
		color: #fff;
		margin-top: 12px;
		margin-bottom: 10px;
		padding: 10px 0px;
		width: 100%;
		margin-left: 2px;
		font-size: 16px;
		border-radius: 0px;
		outline: none;
	}

	.submitButton:hover,
	.submitButton:focus {
		color: #fff;
		outline: none;
	}

	.forGotPassword {
		background-color: #F2F2F2;
		padding: 15px 0px;
		text-align: center;

	}

	.forGotPassword:hover {
		box-shadow: 0 10px 10px -2px rgba(0, 0, 0, 0.12);
	}

	.forGotPassword a {
		color: #000;
		outline: none;
	}

	.forGotPassword a:hover,
	.forGotPassword a:active,
	.forGotPassword a:focus {
		text-decoration: none;
		outline: none;
	}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="col-lg-4 col-md-3 col-sm-2"></div>
	<div class="col-lg-4 col-md-6 col-sm-8">
		<div class="logo">
			<!-- <img src="https://s16.postimg.org/3wg150ysl/download.jpg" alt="Logo"> -->
		</div>
		<div class="row loginbox">
			<div class="col-lg-12">
				<span class="singtext">Sign in </span>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">
				<input class="form-control" type="text" id="username" name="username" placeholder="Please enter your user name">
			</div>
			<div class="col-lg-12  col-md-12 col-sm-12">
				<input class="form-control" type="password" id="userpwd" name="userpwd" placeholder="Please enter password">
			</div>
			<div class="col-lg-12  col-md-12 col-sm-12">
				<button class="btn  submitButton" onclick="submit_func()">Submit </button>
			</div>

		</div>
		<div class="row forGotPassword">
			<!-- <a href="#">Forgot Username / Password? </a> -->
		</div>
		<br>
		<br>
		<footer class="footer">
			<p>©2021 Designed by Nikola Ivanovic</p>
		</footer>
		<!--footer Section ends-->

	</div>
	<div class="col-lg-4 col-md-3 col-sm-2"></div>
</div>

<script>
	function submit_func() {
		var username = $('#username').val();
		var userpwd = $('#userpwd').val();
		if (username == '') {
			alert('Please input username!');
			return;
		}
		if (userpwd == '') {
			alert('Please input password!');
			return;
		}
		if (username != "admin") {
			alert('Please input username correctly!');
			return;
		}
		if (userpwd != "1234") {
			alert('Please input password correctly!');
			return;
		}

		$.ajax({

			url: 'auth/login',
			type: 'post',
			data: {
				'username': username,
				'userpwd': userpwd
			},
			dataType: 'json',
			success: function(data) {
				if(data.state === "fail"){
					alert(data.message);
				}
				else {
					alert(data.message);
					location.href ="auth/show_user_manage";
				}
			},
			error: function(request, error) {
				alert("Ajax Error!!!");
			}
		});
	}

</script>