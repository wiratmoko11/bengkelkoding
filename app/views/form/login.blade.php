<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    @include('include.css')
</head>

<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Account Access</h1>
                <div class="panel panel-default text-center">
                    {{HTML::image('assets/images/people/110/guy-5.jpg', '', array('class'=>'img-circle'))}}
                    <div class="panel-body">
                        {{Form::open(array('route'=>'signin'))}}
                            {{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'Username'))}}
                            {{Form::password('password', array('class'=>'form-control', 'placeholder'=>'Enter Password'))}}
                            {{Form::submit('Login', array('class'=>'btn btn-primary'))}}
                            <!-- <a href="index.html" class="btn btn-primary">Login<i class="fa fa-fw fa-unlock-alt"></i></a> -->
                            <a href="#" class="forgot-password">Forgot password?</a>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.js')
</body>
@include('include.js')