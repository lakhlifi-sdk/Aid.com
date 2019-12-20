
@extends('layouts/app')

@section('content')


@include('design.header')
@isset($question)

    
    <div class="container-fluid">
        
    </div>
    
    <div class="container featured-area-default padding-30">
        <div class="row">
            <div class="col-md-8 padding-20">
                <div class="row">
                    <!-- BREADCRUMBS -->
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                               <a href="{{url('show')}}">General</a>
                            </li>
                            <li>
                                <a href="{{url('show')}}">General</a>
                            </li>
                            
                            
                            <li class="active">{{$question->contenu}}</li>
                          
                        </ol>
                    </div>

    <form  class="form" method="POST" action="{{url('reponce')}}">
        {{csrf_field()}}                           
                    <div class="panel panel-default">
                        <div class="comments-user">
                                        <a href="{{url('user/'.$question->user->id.'/showuser')}}"><img class="img-circle img-thumbnail isTooltip" src="@if($question->user->photo){{asset('storage/'.$question->user->photo)}}@else{{asset('images/user.png')}}@endif" alt="gomac user" width="30px" height="30px">
                                        <div class="user-name">{{$question->user->name}}</div></a>
                                        <div class="comment-post-date">Posted On
                                            <span class="italics" style="font-size: small;">{{$newDateFormat}}</span>
                                        </div>
                         </div>
                            <div class="article-heading margin-bottom-5">
                                <a href="#">
                                <i class="fa fa-pencil-square-o"></i> {{$question->titre}}?</a>
                            </div>
                            
                            <div class="article-info">
                                <div class="art-date">
                                    <a href="#">
                                        <i class="fa fa-calendar-o"></i> {{$question->created_at}}</a>
                                </div>
                                <div class="art-category">
                                    <a href="#">
                                        <i class="fa fa-folder"></i> Account Settings </a>
                                </div>
                                <div class="art-comments">
                                    <a href="#">
                                        <i class="fa fa-comments"></i> {{$count}}</a>
                                </div>
                            </div>
                            <div class="article-content">
                               
                                   <p>{{$question->contenu}}</p>
                                   @if($question->photo)

                            <center><img class="img-thumbnail" src="{{asset('storage/'.$question->photo)}}"></center>


                            @endif                     
                            </div>
                                           
                             </div>
                    
                            
                  @foreach($question->reponces as $r)  {{-- <hr class="style-three"> --}}
               <div class="panel panel-default"> 
                    <div class="article-content">
                                <div class="article-comment-top">
                                    <div class="comments-user">
                                      <a href="{{url('user/'.$r->user->id.'/showuser')}}">  <img src="@if($r->user->photo){{asset('storage/'.$r->user->photo)}}@else{{asset('images/user.png')}}@endif" alt="gomac user">
                                        <div class="user-name">{{$r->user->name}}</div></a>
                                        <div class="comment-post-date">Reply On
                                            <span class="italics">{{$r->created_at}}</span>
                                        </div>
                                    </div>
                                    <div class="comments-content">
                                        <p>
                                            
                                    {{$r->contenu}}
                                           

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                     </div>
                     
                 @endforeach 

                     <input type="hidden" name="question_id" value="{{$question->id}}">

                     <div class="form-group{{ $errors->has('reponce') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">Reply</label>

                            <div class="col-md-9">
                                <textarea id="email" type="" class="form-control" name="reponce" value="{{ old('reponce') }}" required></textarea>

                                @if ($errors->has('reponce'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reponce') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default btn-sm pull-right">
                     <i class="fa fa-reply"></i> Reply</button>
                        </div>

                  {{-- <div class="article-read-more">
                     
                     <textarea type="txt" class="form-control" name="reponce" > </textarea>
                     
                </div>  --}}
           </form>

 







 </div>
</div>
 @include('design.menubody')
 </div>
 </div>   

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- FOOTER -->
    @include('design.footer')
 @endisset
@endsection