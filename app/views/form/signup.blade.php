<!DOCTYPE html>
<html>
<head>
	<title></title>
	 @include('include.css')
</head>
<body class="signup">
	<div id="content">
		<div class="container-fluid">
			<div class="lock-container">
				<h1>Sign Up</h1>
				<div class="panel panel-default text-center">
					<div class="panel-body">
						
					{{Form::open(array('route'=>'signup','class'=>'form'))}}
					{{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'Username'))}}
					{{Form::text('email', '', array('class'=>'form-control', 'placeholder'=>'Email'))}}
					{{Form::password('password', array('class'=>'form-control', 'placeholder'=>'Your Password'))}}

					{{Form::submit('SignUp', array('class'=>'btn btn-primary'))}}
					{{Form::close()}}
					<hr>
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-default btn-icon-stacked"><i class="fa fa-2x fa-facebook"></i> <span>Join using your<br>Facebook Account</span></button>
						</div>
					</div>
					
					</div>
					
					
				</div>
				<div>
					
					
				</div>
			</div>

		</div>
	</div>
	@include('include.js')
</body>
</html>	
	