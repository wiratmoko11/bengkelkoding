@extends('index')

@section('content')


<div class="panel panel-default">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#newthread" role="tab" data-toggle="tab">New Thread</a>
        </li>
        <li class=""><a href="#profile" role="tab" data-toggle="tab"><i class="fa fa-folder"></i> Albums</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="newthread">
            <div class="table-responsive">

                <table class="table v-middle">
                    <thead>
                        <tr>
                            <th style="width:50px"></th>
                            <th>Thread</th>
                            <th>View</th>
                            <th>Comment</th>
                            
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($threads as $thread)
                    <?php
                        $user = DB::table('users')->where('id', $thread->userid)->first();
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
                                <img src="assets/images/people/50/guy-5.jpg" alt="">
                            </td>
                            <td>
                            <a href="{{'forum/'.$link}}">{{$thread->judul}}</a>  @if($solved == 1)
                                {{'<label class="label label-success">solved</label>'}}
                            @endif<br>

                            <i class="fa fa-user"></i> {{$user->username}}

                            </td>
                            <td>{{$thread->view}} views</a>
                            </td>
                            <td>
                                {{$total}} comments
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
    </div>
</div>
@stop