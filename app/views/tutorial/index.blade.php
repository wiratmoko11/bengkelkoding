@extends('index')

@section('content')
    <div class="tutorial">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table v-middle">
                        <tbody>
                            @foreach($tutorials as $key)
                            <?php
                                $user = User::find($key->userid);

                                $linkex = explode(" ", $key->judul);
                                $link = strtolower(implode("-", $linkex));
                                $link = $key->id."/".$link;
                            ?>
                            

                            <tr>
                                <td style="text-align:center">
                                    {{HTML::image('assets/images/people/50/guy-5.jpg', '', array('class'=>'img-circle'))}} <br>
                                    {{$user->username}} <br>
                                    {{$key->created_at}}
                                    
                                </td>
                                <td>
                                    <h4>{{$key->judul}}</h4> <br>
                                    <p>
                                        <?php 
                                            echo substr(strip_tags(($key->content)), 0,200);
                                            echo '.......';
                                        ?>
                                    </p>
                                    <a href="tutorial/{{$link}}"><button class="btn btn-success btn-sm" href>Show More <i class="fa fa-chevron-right"></i> </button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </div>
    </div>

	<div class="wrapper wrapper-tutlist">

                        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
                          @foreach($tutorials as $tutorial) 
                        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>{{$tutorial->judul}}</h3>
                <h4>Subheading</h4>
                <p>

                <?php 
                	echo substr(strip_tags(($tutorial->content)), 0,500);
                ?>
                	
                </p>
                <?php
                	$linkex = explode(" ", $tutorial->judul);
                	$link = strtolower(implode("-", $linkex));
                    $link = $tutorial->id."/".$link;
                ?>
                <a href="tutorial/{{$link}}"><button class="btn btn-primary btn-sm">Read more</button> <span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
        <hr>
        @endforeach
        
        <hr>
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">«</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">»</a>
                    </li>
                </ul>
            </div>
        </div>
  
  
                        </div>
	<p>Halaman Index Tutorial</p>
	
		
	
	
@stop