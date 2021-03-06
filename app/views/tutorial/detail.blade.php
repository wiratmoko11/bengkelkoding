@extends('index')

@section('content')

@foreach($tutorial as $key)
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default panel-tutorial-detail">
            <div class="panel-heading panel-heading-gray">
                <div class="upvote pull-right">
                    <h3><i class="fa fa-arrow-circle-up"></i>10</h3>
                </div>
                <h3>{{$key->judul}}</h3>
            </div>
            <div class="profile-icons profile-icons-tutorial">
                 @foreach($user as $keyuser)
                <span><i class="fa fa-user"></i> {{$keyuser->username}}</span>
                <span><i class="fa fa-clock-o"></i> 20 Juli 2015</span>
                <span><i class="fa fa-share-alt"></i> 6 </span>
                @endforeach
            </div>
            <div class="panel-body">
                {{$key->content}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default profile-user-box">
            <div class="panel-heading">
                Information
            </div>
            <div class="panel-body">
                <div class="avatar">

                    {{HTML::image('assets/images/people/50/guy-5.jpg', '', array('class'=>'img-circle'))}} <br>
                    WIrat Moko HAdi S

                </div>
                <hr>
                <div class="information" style="text-align:left">
                    Kategori : Web Designer <br>
                    Kesulitan : High <br>
                    Durasi : Lama <br>
                    Tags :
                </div>
                    
                <div class="tags" style="text-align:left">
                    <button class="btn btn-inverse">Tags<i class="fa fa-tags"></i></button>
                    <button class="btn btn-inverse">Tags<i class="fa fa-tags"></i></button>
                </div>
                <div class="button-download-attachment">
                    <button class="btn btn-primary btn-sm"><i class="fa fa-download"></i>Download Attachment</button>
                </div> 
            </div>
        </div>
    </div>
</div>

@endforeach
@stop