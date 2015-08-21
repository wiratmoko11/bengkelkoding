@extends('index')

@section('content')
<<<<<<< HEAD
<div class="media user-profile">
    <div class="row">
    {{Session::token()}}
=======


<div class="media user-profile">
    <div class="row">
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
        <div class="panel panel-default profile-user-box">
            <div class="avatar">
                <div class="photo-profil">
                    <img src="assets/images/people/110/guy-5.jpg" alt="" class="img-circle">
                    <i class="fa fa-pencil"></i>
                    </img>
                </div>
                <h3>{{$users->name}}</h3>
                <h4>{{$users->job}}</h4>
<<<<<<< HEAD
                {{Form::hidden('userId', $users->id, array('id'=>'userId'))}}
                @if($following == true)
                <a href="#" id="follow" class="btn btn-success follow">Following <i class="fa fa-check-circle fa-fw"></i></a>
                {{Form::hidden('status', 1, array('id'=>'status'))}}
                @else
                <a href="#" id="follow" class="btn btn-follow follow">Follow <i class="fa fa-plus-circle fa-fw"></i></a>
                {{Form::hidden('status', 0, array('id'=>'status'))}}
                @endif
=======
                <a href="#" class="btn btn-success">Following <i class="fa fa-check-circle fa-fw"></i></a>
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
            </div>
            
            <div class="profile-icons">
                <span><i class="fa fa-star"></i>1240</span> <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span> <span><i class="fa fa-video-camera"></i> 3 </span>
            </div>
<<<<<<< HEAD
                {{$users->about}}
=======
                <p>Hi! I'm Adrian the Senior UI Designer at
                <strong>MOSAICPRO</strong>. We hope you enjoy the design and quality of Social.</p>
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
            </div>
            </div>
    
        <div class="media-object pull-left">
            <div class="panel panel-default">

                        <div class="panel-heading">
                        <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                            Contact Me
                        </div>
                        <ul class="icon-list block bordered">
                            <li><i class="fa fa-envelope fa-fw"></i> <a href="#">{{$users->email}}</a>
                            </li>
                            <li><i class="fa fa-facebook fa-fw"></i> <a href="http://facebook.com/{{$users->fb}}">/{{$users->fb}}</a>
                            </li>
                            <li><i class="fa fa-twitter fa-fw"></i> <a href="#">/{{$users->twitter}}</a>
                            </li>
                        </ul>
                    </div>

            <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                        <i class="fa fa-info-circle"></i> About
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled profile-about">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                    </div>
                                    <div class="col-sm-8">12 January 1990</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Job</span>
                                    </div>
                                    <div class="col-sm-8">Specialist</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Gender</span>
                                    </div>
                                    <div class="col-sm-8">Male</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Lives in</span>
                                    </div>
                                    <div class="col-sm-8">Miami, FL, USA</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Credits</span>
                                    </div>
                                    <div class="col-sm-8">249</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

        </div>
        <div class="media-body">

                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <i class="fa fa-bookmark"></i> Thread
                    </div>
                    
                        
                    
                    <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr>
                                <th>Thread</th>
                                <th>View</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($threads as $thread)
                            <?php
                                $solved = $thread->solved;

                                $judul = $thread->judul;
                                $link = explode(" ", $judul);
                                $link = implode("-", $link);
                                $link = $thread->id."/".$link;

                                $comment = DB::table('tcomments')->where('threadid', $thread->id)->get();
                                $total = count($comment);
                            ?>
                            <tr>
                                <td>
                                    <a href="{{URL::to('forum/'.$link)}}">{{$thread->judul}}</a>
                                    @if($solved == 1)
                                        {{'<label class="label label-success">solved</label>'}}
                                    @endif
                                </td>
                                <td>
                                    {{$thread->view}}
                                </td>
                                <td>
                                    {{$total}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <i class="fa fa-code"></i> Project Portofolio
                    </div>
                    <div class="panel-body">
                        <div class="arow">
                        <div class="col-md-4 col-xs-12">
                            
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <h3>Atom - Designed for Mobile Apps</h3>
                            <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                            <a href=""><i class="fa fa-external-link"></i>More</a>
                        </div>
                    </div>

                    <div class="arow">
                        <div class="col-md-4 col-xs-12">
                            
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <h3>Atom - Designed for Mobile Apps</h3>
                            <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                            <a href=""><i class="fa fa-external-link"></i>More</a>
                        </div>
                    </div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Pengalaman Kerja
                    </div>
                    <div class="panel-body">
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder &amp; Lead Developer - <span class="place"><a href="#">Startup Hub</a></span> <span class="year">(2014 - Present)</span></h3>
                                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
</div>
<<<<<<< HEAD
=======


@if(Auth::user())
    <div id="editprofil-box" style="display:none" class="popup">
        <a href="#" class="close">
            {{HTML::image('assets/img/close_pop.png')}}
        </a>
        <div class="wrapper" style="margin:0px;">          
            <h4 style="color:white">Edit Profil</h4>
            {{Form::open(array('route'=>'editProfil','class'=>'form', 'enctype'=>'multipart/form-data'))}}
                {{Form::text('name-edit', Auth::user()->name ,array('class'=>'form-control', 'placeholder'=>'username'))}}
                {{Form::text('job-edit', Auth::user()->job, array('class'=>'form-control', 'placeholder'=>'job'))}}
                {{Form::text('facebook-edit', Auth::user()->fb, array('class'=>'form-control', 'placeholder'=>'Facebook Username'))}}
                {{Form::text('twitter-edit', Auth::user()->twitter, array('class'=>'form-control', 'placeholder'=>'Twitter Username'))}}
                {{Form::submit('login', array('class'=>'btn btn-primary'))}}
            {{Form::close()}}
        </div>
    </div>

    <div id="editfoto-box" style="display:none" class="popup">
        <a href="#" class="close">
            {{HTML::image('assets/img/close_pop.png')}}
        </a>
        <div class="wrapper" style="margin:0px;">
            <h4 style="color-white">Ganti Foto Profil</h4>
            {{Form::open(array('class'=>'form', 'enctype'=>'multipart/form-data'))}}
            <div class="imageBox">
                <div class="thumbBox"></div>
                <div class="spinner" style="display: none">Loading...</div>
            </div>
            <div class="action">
                <input type="file" id="file" style="float:left; width: 250px">
                <input type="button" id="btnCrop" value="Crop" style="float: right">
                <input type="button" id="btnZoomIn" value="+" style="float: right">
                <input type="button" id="btnZoomOut" value="-" style="float: right">
            {{Form::close()}}
            </div>
            <script type="text/javascript">
                window.onload = function() {
                    var options =
                    {
                        imageBox: '.imageBox',
                        thumbBox: '.thumbBox',
                        spinner: '.spinner'
                    }
                    var cropper = new cropbox(options);
                    document.querySelector('#file').addEventListener('change', function(){
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            options.imgSrc = e.target.result;
                            cropper = new cropbox(options);
                        }
                        reader.readAsDataURL(this.files[0]);
                        this.files = [];
                    })
                    document.querySelector('#btnCrop').addEventListener('click', function(e){
                        e.preventDefault();
                        var img = cropper.getDataURL();
                        var token = $('input[name="_token"]').val();
                        var data = {image:img, token:token};

                        var request = 
                        //ajax post
                        $.post('editphoto', data)
                        document.querySelector('.foto-profil').innerHTML = '<img src="'+img+'">';


                        request.done(function( msg ) {
                            //var response = JSON.parse(msg);
                            //console.log(response.msg);
                            
                        });

                        request.fail(function( jqXHR, textStatus ) {
                            console.log( "Request failed: " + textStatus );
                        });

                    });

                    document.querySelector('#btnZoomIn').addEventListener('click', function(){
                        cropper.zoomIn();
                    });
                    document.querySelector('#btnZoomOut').addEventListener('click', function(){
                        cropper.zoomOut();
                    })
                };
            </script>


            {{Form::close()}}
        </div>
    </div>
@endif
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
@stop