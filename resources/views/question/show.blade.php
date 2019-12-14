@extends('layouts/app')


@section('content')

@if(session()->has('success'))
<div class="container">
    <div class="row">
<div style="text-align: center;" class="alert alert-success col-md-12 col-offset-4">
    {{session()->get('success')}}
</div>
</div>
</div>
@endif
@include('design.header')

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

 <div  class="container">
	

	<div  class="row">
		<div  class="col-md-12">
			
			
				{{-- @if($questions)
				@foreach($questions as $q)
				<form id="formID" class="form" method="POST" action="{{url('reponce')}}">
					{{csrf_field()}}
				   <div class="panel-group">
				   	<input type="hidden" name="question_id" value="{{$q->id}}">: {{$q->created_at}}
					  <div class="panel panel-primary">
					    <div class="panel-body"><h6>{{$q->user->name}}: <h5>{{$q->titre}}</h5></h6></div>
					  </div>
					  <div class="panel panel-primary">
					    <div style="border: 2px solid  red; width: 100%;height: 80px; text-decoration: underline; background-color: yellow; " class="panel-body ">{{$q->contenu}}</div>
					  </div>
					  <div class="form-group">
					  	@foreach($q->reponces as $r)
					  	<p style="border: 1px solid; min-height: 10px" class="form-control">
                            {{$r->user->name}} :->{{$r->contenu}} <small style="color: red; " class="pull-right">{{$r->created_at}}</small></p>
					  	@endforeach
					<textarea type="txt" class="form-control" name="reponce" id="myInput"> </textarea><button class="btn-success btn pull-right"  >Repondre</button>

				</div>
					</div>
					<br>
									
               </form>
				@endforeach
				@endif
				 --}}
			</table>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('formID').reset();
	</script>  
</div>



    
    <div  class="container featured-area-default padding-30">
        <div class="row">
            <!-- ARTICLE OVERVIEW SECTION -->
            <div style="background-color: rgb(171,154,253);" class="col-md-8 padding-20">
                <div class="row">
                    <!-- BREADCRUMBS -->
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="active">Toutes les question</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- ARTICLES -->
                    <div class="fb-heading">
                        Toutes les question
                    </div>
                    <hr class="style-three">
                @if($questions)
				@foreach($questions as $q)
                    <div class="panel panel-default">
                
                        <div class="article-heading-abb">
                            <img src="{{asset('images/user.png')}}" alt="gomac user" width="30px" height="30px">
                                        <div class="user-name">{{$q->user->name}}</div>
                                        <div class="comment-post-date">Posted On
                                            <span class="italics">{{$q->created_at}}</span>
                                        </div>
                                        <div class="user-name"></div>
                            <a href="{{url('question/'.$q->id.'/singleArticle')}}">
                                <i class="fa fa-pencil-square-o"></i> {{$q->titre}}</a>
                        </div>
                        <div class="article-info">
                            <div class="art-date">
                                <a href="#">
                                    <i class="fa fa-calendar-o"></i> {{$q->created_at}} </a>
                            </div>
                            <div class="art-category">
                                <a href="#">
                                    <i class="fa fa-folder"></i>  </a>
                            </div>
                            <div class="art-comments">
                                <a href="#">
                                    <i class="fa fa-comments"></i> {{$count}} </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <p class="block-with-text">
                                {{$q->contenu}}
                            </p>
                        </div>
                        <div class="article-read-more">
                            <a href="{{url('question/'.$q->id.'/singleArticle')}}" class="btn btn-default btn-wide">Read more...</a>
                        </div>
                
                </div>
                @endforeach
                @endif

                  
                </div>
            </div>
          @include('design.menubody')
          <div style="background-color: rgb(171,154,253);" class="col-md-4 padding-2">
            <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading">Les Utilisateur les plus actives</div>
                    <div class="panel-body">

                        @if($usr)
                        @foreach($usr as $u)

                        <div style="text-align: left;" class="panel panel-default btn btn-warning">
                            <div style="margin: 1px; padding: 2px; width: 300px;" class="panel-body">

                                <div class="article-heading-abb">
                            <img src="{{asset('images/user.png')}}" alt="gomac user" width="20px" height="20px">
                                        <div class="user-name"style="margin: 1px; padding: 2px;">{{$u->name}}</div>
                                        <div style="font-size: small;">
                                            <span class="italics"></span>
                                        </div>
                                        
                            
                        </div>

                                
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
          </div>

        </div>
    </div>


   
    @include('design.footer')
    <!-- END COPYRIGHT INFO -->

    <!-- LOADING MAIN JAVASCRIPT -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</body>

</html>

@endsection