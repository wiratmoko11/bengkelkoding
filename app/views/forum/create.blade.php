@extends('index')

@section('content')

	<div id="create-tutorial">
		<div class="col-md-12">
			<div class="wrapper">
				{{Form::open(array('route'=>'postThread'))}}
				{{Form::hidden('userid',Auth::id())}}
				<div class="create-wrap">
					<div class="create-header">
						<div id="header-tittle">
							<h3>Create Disscussion</h3>
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
											<h5>Judul : </h5>
										</div>
										
									</div>
									<div class="col-md-8">
										{{Form::text('thread-tittle', '', array('class'=>'form-control'))}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<div style="text-align:right;">
											<h5>Kategori : </h5>
										</div>
									</div>
									<div class="col-md-2">
										{{Form::select('kategori',$kategori,'', array('class'=>'form-control'))}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<div style="text-align:right">
											<h5>Content : </h5>
										</div>
									</div>
									<div class="col-md-8">
										{{Form::textarea('content','', array('class'=>'form-control textarea'))}}
									</div>
									
								</div>
								
						</div>

					</div>
				</div>
				{{Form::close()}}	
			</div>
			
		</div>
	</div>

@stop