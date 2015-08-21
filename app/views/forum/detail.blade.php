@extends('index')

@section('content')

<div class="row">
	<div class="col-md-2 col-sm-3">
		<div class="panel panel-default profile-user-box">
			<div class="panel-body">
				<?php
					$avatar = User::find($forums->userid);
				?>
				<div class="avatar">
					{{HTML::image('assets/images/people/50/guy-5.jpg', '', array('class'=>'img-circle'))}}
					<h4>{{$avatar->name}}</h4>
				</div>
				
				
			</div>
		</div>
	</div>
	<div class="col-md-10 col-sm-9">
		<div class="panel panel-default">
			<div class="upvote-button pull-left">
				@foreach($thread_voter as $tvoter)
				@if(Auth::check())
					@if($tvoter !== Auth::id())
						<a href="" class="upvote-thread"><i class="fa fa-arrow-circle-up fa-2x"></i></a>
					@endif
				@endif
				@endforeach
			</div>
			<div class="panel-body">
				<h3>{{$forums->judul}}</h3>
				<div class="question-post">
					{{$forums->content}}
				</div>
			</div>
		</div>

	</div>
</div>
<hr>
@foreach($comment as $key)
<div class="row" style="margin-left:50px">
	<div class="col-md-2">
		<div class="panel panel-default profile-user-box">
			<div class="panel-body">
				<?php
					$avatar = User::find($key->userid);
				?>
				<div class="avatar">
					{{HTML::image('assets/images/people/50/guy-5.jpg', '', array('class'=>'img-circle'))}}
					<h4>{{$avatar->username}}</h4>

				</div>
				<div class="post-detail">
					<i class="fa fa-clock-o"></i>{{$key->created_at}}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="upvote-button pull-left">
				
				<a href=""><i class="fa fa-arrow-circle-up fa-2x"></i></a>
			</div>
			<div class="solve-button pull-right">
				<button class="btn btn-success">Solving</button>
			</div>
			
			<div class="clearfix"></div>
			<div class="panel-body">
				{{$key->comment}}
				<div class="comment-form">
					<div class="input-group">
                        <input class="form-control" type="text" placeholder="Your Comment">
                        <span class="input-group-addon">
                   			<i class="fa fa-arrow-right"></i>
                		</span>
                    </div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
@endforeach









<div class="col-md-12">
	<div class="main">
		<div class="questions">
			<div class="question-judul" style="width:auto">
				<h3>{{$forums->judul}}</h3>
			</div>
			<div class="question">
				<div class="question-post">
					{{$forums->content}}
				</div>
				<hr>
				<div class="post-signature">
					<div class="time-signature">
						<i class="fa fa-time"></i>{{$forums->created_at}}
					</div>
					<?php
						$avatar = User::find($forums->userid);
						//echo $forums->userid;
					?>
					<div>
						
						<div class="user-avatar32 pull-left">
							<img src="{{$avatar->photo}}" style="width:32px;">
						</div>
						
						<div class="user-detail pull-left">
							{{$avatar->username}}
							
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="likeblock pull-right">
					{{Form::open()}}
                    <a href="#" class="upvote-threads"><i class="fa fa-thumbs-o-up"></i></a><span class="point-thread">{{$forums->point}}</span> 
                    {{Form::hidden('threadid', $forums->id)}}
                    {{Form::close()}}

                    <script type="text/javascript">
                    $(document).ready(function(){
                    	$('.upvote-threads').click(function(e){
                    		e.preventDefault();
                    		var token = $('input[name="_token"]').val();
                    		var thread_id = $('input[name="threadid"]').val();
                    		var data = {token:token, threadid:thread_id};
                    		//ajax post 
                    		$.ajax({
                    			url:'../../upvotethread',
                    			data:data,
                    			method:'post',
                    			success: function(data){
                    				document.querySelector('.point-thread').innerHTML ='<span class="point-thread">' +({{$forums->point}}+1) +'</span>';
                    				$('.upvote-threads').replaceWith('<i class="fa fa-thumbs-o-up">');
                    			}
                    		});
                    		//$.post('../../upvotethread', data);
   
                    		
                    		
                    	});
                    });
                    </script>

                </div>

			</div>

			<div class="answer-count">
				4 Answer
			</div>
		</div>
		

		<div class="answers">
			@foreach($comment as $comment)
			<div class="answer">

				{{$comment->comment}}
				<hr>
				<div class="post-signature">
					<div class="time-signature">
						<i class="fa fa-time"></i>{{$comment->created_at}}
					</div>
					<?php
						$avatar = User::find($comment->userid);
					?>
					<div>
						<div class="user-avatar32 pull-left">
							<img src="{{$avatar->photo}}" style="width:32px;">
						</div>
						<div class="user-detail pull-left">
							{{$avatar->username}}
							
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="likeblock pull-right">
                    <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
                </div>
			</div>
			<hr>
			@endforeach
			
		</div>
		<hr>
		<div class="post-form">
			<h3>Your Answer</h3>
			<div class="post-editor">
				{{Form::open(array('route'=>'threadComment'))}}
				{{Form::hidden('threadid', $forums->id)}}
				{{Form::textarea('content','', array('class'=>'form-control textarea'))}}
				{{Form::submit('submit')}}
				{{Form::close()}}
			</div>
			
		</div>
	</div>
</div>
	
@stop