@extends('layouts.app')

@section('content')
<div class="container">
  @include('design.header')  
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="container">
                      <div class="panel panel-default col-md-9 ">
                        <div class="panel-body col-md-8 col-md-offset-2">
                      <a href="{{url('question/create')}}" class="btn btn-success col-md-12">Creer une question</a> 
                        </div>
                    </div>
                    <div class="panel panel-warning col-md-9">
                        <div class="panel-body col-md-8 col-md-offset-2">
                      <a href="{{url('show')}}" class="btn btn-primary col-md-12">Toutes les questions </a>
                    </div>
                  </div>
                   <div class="panel panel-default col-md-9">
                        <div class="panel-body col-md-8 col-md-offset-2">
                      <a href="{{url('index')}}" class="btn btn-default col-md-12">Mes questions questions</a>
                    </div>
                  </div>
                  <div class="panel panel-default col-md-9">
                        <div class="panel-body col-md-8 col-md-offset-2">
                      <a href="{{url('home')}}" class="btn btn-success col-md-12">Home</a>
                    </div>
                  </div>

                      {{-- <a href="{{url('users')}}" class="btn btn-success">users</a> --}}
                    
                    </div>
                  </centr>
                  </div>
                </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>

        
  
@endsection
