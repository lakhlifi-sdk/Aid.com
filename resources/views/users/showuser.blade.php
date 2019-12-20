@extends('layouts/app')


@section('content')
@isset($user)


<div class="container">
	<div class="row">
		<div class="col-md-12">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

			<div class="panel panel-success">
				<div class="panel-heading">

					Profil
					 @if($user->id===Auth::user()->id)
					<a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-default pull-right">Edite</a>@endif
					  
					 <a href="" onclick="window.print()" class="btn btn-default pull-right">Print</a>

				</div>
					<div class="panel-body">
						<div class="container bootstrap snippet">
	
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="@if($user->photo){{asset('storage/'.$user->photo)}}@else{{asset('images/user.png')}}@endif" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
            <br>
            <br>
           
            @if($countq)
            
            <button style="width: 350px;" type="button" class="btn btn-primary">nombre des questions <span class="badge">{{$countq}}</span></button>
            
            @endif
             <br>
             <br>
            @if($countr)
            <button style="width: 350px;" type="button" class="btn btn-seccess">nombre des reponces <span class="badge"></span>
            <span class="badge">{{$countr}}</span></button>

            @endif

            <br>
            <br>
            
        </div>
        <div class="col-md-6">
            <strong>Information</strong><br>
            <div class="table-responsive">
            <table class="table table-condensed table-responsive table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <i class="glyphicon glyphicon-asterisk text-primary"></i>
                                Identificacion                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->id}}     
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->name}}    
                        </td>
                    </tr>
                    

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Username                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                             {{$user->name}} 
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Role                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            User
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                             {{$user->email}} 
                        </td>
                    </tr>

                    
                    <tr> 
                       @if($date)   
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span> 
                                created                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                             {{$date}} 
                        </td> 
                        @endif
                    </tr>

                   @if($user->city)
                    <tr> 
                          
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span> 
                                city                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                             {{$user->city}} 
                        </td> 
                       
                    </tr>

                      @endif  

                      <tr>        
                        <td>
                            
                        </td>
                         <td >
                            
                         </td>
                    </tr>
                                       
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>                                        
					</div>

				
			</div>


			
		</div>
	</div>
</div>

@endisset

@endsection
