@extends('index')

@section('content')
<<<<<<< HEAD
{{HTML::script('assets/plugin/ckeditor/ckeditor.js')}}
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create Tutorial
			</div>
			{{Form::open(array('route'=>'createTutorial'))}}
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<div style="text-align:right;"> 
							<h5>Judul Tutorial : </h5>
						</div>
						
					</div>
					<div class="col-md-8">
						{{Form::text('tutorial-tittle', '', array('class'=>'form-control'))}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div style="text-align:right;">
							<h5>Kategori : </h5>
						</div>
					</div>
					<div class="col-md-2">
						{{Form::text('kategori','', array('class'=>'form-control'))}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div style="text-align:right">
							<h5>Tutorial : </h5>
						</div>
					</div>
					<div class="col-md-8">
							{{Form::textarea('content-tutorial','', array('class'=>'form-control textarea'))}}
						<script>
							CKEDITOR.replace('content-tutorial');
						</script>
					</div>
					
				</div>
				<hr>
				<div class="row">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-8">
						{{Form::submit('create', ['class'=>'btn btn-success'])}}
					</div>
				</div>
				
				
			</div>
			{{Form::close()}}
		</div>
	</div>
</div>


=======
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348

	<div id="create-tutorial">
		<div class="col-md-12">
			<div class="wrapper">
				{{Form::open(array('route'=>'createTutorial'))}}
				<div class="create-wrap">
					<div class="create-header">
						<div id="header-tittle">
							<h3>Create Tutorial</h3>
						</div>
						<div id="sumbit-btn">
							<div>
								{{Form::submit('Simpan', array('class'=>'btn btn-primary'))}}
							</div>
						</div>
					</div>
					<hr>
					<div class="create-content">
						<div id="create-title">
							
								<div class="row">
									<div class="col-md-2">
										<div style="text-align:right;"> 
											<h5>Judul Tutorial : </h5>
										</div>
										
									</div>
									<div class="col-md-8">
										{{Form::text('tutorial-tittle', '', array('class'=>'form-control'))}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<div style="text-align:right;">
											<h5>Kategori : </h5>
										</div>
									</div>
									<div class="col-md-2">
										{{Form::text('kategori','', array('class'=>'form-control'))}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<div style="text-align:right">
											<h5>Tutorial : </h5>
										</div>
									</div>
									<div class="col-md-8">
<<<<<<< HEAD
										
=======
										{{Form::textarea('content','', array('class'=>'form-control textarea'))}}
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
									</div>
									
								</div>
								
						</div>

					</div>
				</div>
				{{Form::close()}}	
			</div>
			
		</div>
	</div>
<<<<<<< HEAD
	
=======

>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
@stop