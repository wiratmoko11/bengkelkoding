@extends('index')

@section('content')
<<<<<<< HEAD
    @foreach($dashboard as $key)
        {{$key->userid}}
        <?php
        $user = User::where('id', $key->typeid)->first();
        ?>
    <div class="row">
        <div class="col-md-9">
            <ul class="timeline-list">
            @if($key->type == 3)
                <li class="media">
                    <div class="pull-left">
                        <img src="assets/images/people/110/{{$user->username}}.jpg" alt="people" class="img-circle" width="80" />
                        <div class="date">20 JUN</div>
                    </div>
                    <div class="media-body" id="june">
                        <div class="panel panel-default profile">
                            <div class="cover-container">
                                <div style="background:gray"></div>
                            </div>
                            <div class="info">
                                <h4>{{$user->username}}</h4>
                                <p>User Interface Designer</p>
                            </div>
                            <img src="assets/images/people/110/{{$user->username}}.jpg" alt="people" class="img-circle avatar" />
                            <div class="profile-icons">
                                <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span> <span><i class="fa fa-video-camera"></i> 3 </span>
                            </div>
                            <a href="#" class="btn btn-brand-primary pull-right"><i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </li>
                @endif
                
                @if($key->typeid == 4)
                <li class="media">
                    <div class="pull-left">
                        <img src="images/people/110/woman-6.jpg" alt="people" class="img-circle" width="80" />
                        <div class="date">9 MAY</div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default profile-card">
                            <div class="panel-body">
                                <div class="profile-card-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h4 class="text-center">Graduation Badge</h4>
                                <ul class="profile-card-items">
                                    <li><i class="fa fa-map-marker"></i> Amsterdam, Europe</li>
                                    <li><i class="fa fa-trophy"></i> 1st in Class</li>
                                    <li><i class="fa fa-calendar"></i> 31st Oct 2014</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
               
                @if($key->typeid == 1)
                <li class="media">
                    <div class="pull-left">
                        <img src="images/people/110/guy-9.jpg" alt="people" class="img-circle" width="80" />
                        <div class="date">29 APR</div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="boxed">
                                    <a href="#" class="h4 margin-none">Vegetarian Pizza</a>
                                    <div class="rating text-left">
                                        <span class="star"></span>
                                        <span class="star filled"></span>
                                        <span class="star filled"></span>
                                        <span class="star filled"></span>
                                        <span class="star filled"></span>
                                    </div>
                                    <div class="media">
                                        <a href="#" class="media-object pull-left">
                                            <img src="images/food1.jpg" alt="" width="80" />
                                        </a>
                                        <div class="media-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                                        </div>
                                    </div>
                                    <ul class="icon-list">
                                        <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                        <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                                        <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                            <ul class="comments">
                                <li>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="images/people/50/guy-5.jpg" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="comment-author">Bill D.</a>
                                            <span>Hi Mary, Nice Party</span>
                                            <div class="comment-date">21st September</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="images/people/50/woman-5.jpg" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="comment-author">Mary</a>
                                            <span>Thanks Bill</span>
                                            <div class="comment-date">2 days</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="images/people/50/guy-5.jpg" class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="comment-author">Bill D.</a>
                                            <span>What time did it finish?</span>
                                            <div class="comment-date">14 min</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" />
                                        <span class="input-group-addon">
           <a href=""><i class="fa fa-photo"></i></a>
        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                @endif
            </ul>
        </div>
        <div class="col-md-3">
            <div data-spy="affix" data-offset-top="318" data-offset-bottom="100">
                <div id="scroll-spy">
                    <ul class="nav timeline-months">
                        <li class="active"><a href="#october"><i class="fa fa-calendar fa-fw"></i>October</a>
                        </li>
                        <li><a href="#september"><i class="fa fa-calendar fa-fw"></i>September</a>
                        </li>
                        <li><a href="#august"><i class="fa fa-calendar fa-fw"></i>August</a>
                        </li>
                        <li><a href="#july"><i class="fa fa-calendar fa-fw"></i>July</a>
                        </li>
                        <li><a href="#june"><i class="fa fa-calendar fa-fw"></i>June</a>
                        </li>
                        <li><a href="#may"><i class="fa fa-calendar fa-fw"></i>May</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
=======
    <div class="timeline row gridalicious" data-toggle="gridalicious">
                @foreach($status as $key)
                <?php
                    $user = DB::table('users')->where('id', $key->userid)->first();
                ?>
                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="assets/images/people/50/child-1.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <!-- <a href="#" class="pull-right text-muted">10<i class="fa-heart-o fa fa-2x "></i></a> -->
                                    <a href="{{$user->username}}">{{$user->name}}</a>
                                    @if($key->tipe == 'tutorial')
                                    <b>[Tutorial]</b>
                                    @elseif($key->tipe == 'thread')
                                    <b>[Thread]</b>
                                    @endif
                                    <span>on {{$key->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body text-muted">
                           {{$key->judul}}
                            <button class="btn btn-success">
                                More
                                <i class="fa fa-arrow-right"></i>

                            </button>
                        </div>
                        
                        <div class="view-all-comments"><a href=""><i class="fa fa-arrow-circle-up "></i></a>10 user upvoting</div>
                        <!-- <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
                @endforeach
                <div class="timeline-block">
                    <div class="panel panel-default relative">
                        <img src="images/place2-full.jpg" alt="place" class="img-responsive">
                        <div class="panel-body panel-boxed text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star filled"></span>
                                <span class="star filled"></span>
                                <span class="star filled"></span>
                                <span class="star filled"></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" />
                            <img src="images/people/50/woman-2.jpg" alt="people" class="img-circle" />
                            <img src="images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                            <img src="images/people/50/woman-3.jpg" alt="people" class="img-circle" />
                            <a href="#" class="user-count-circle">12+</a>
                        </div>
                    </div>
                </div>
    </div>
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
@stop