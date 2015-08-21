@extends('index')

@section('content')

<div class="col-md-12">
	

<div class="container-signup">
	<div class="panel panel-default panel-signup-1">
		<div class="panel-heading">
			Sign Up
		</div>
		<div class="panel-body">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 col-form-control">
						{{Form::text('name', '', array('class'=>'form-control', 'placeholder'=>'Name'))}}
					</div>
					<div class="col-md-6 col-form-control">
						{{Form::text('job', '', array('class'=>'form-control', 'placeholder'=>'Job'))}}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-form-control">
						{{Form::text('aboutme','', array('class'=>'form-control', 'placeholder'=>'About Me (maks 100)'))}}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 col-form-control">
						<div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
	                            <input class="form-control" placeholder="Facebook" type="text">
	                    </div>
					</div>
					<div class="col-md-6 col-form-control">
						<div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
	                            <input class="form-control" placeholder="Twitter" type="text">
	                    </div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
	                        <span class="input-group-addon"><i class="fa fa-github"></i></span>
	                            <input class="form-control" placeholder="Github" type="text">
	                    </div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="pull-right">
						<a href="">
							<button class="btn btn-primary">Submit</button>
						</a>
					</div>
				</div>
			</div>
			<hr>
			
		</div>
	</div>
</div>	
</div>
@stop