@extends('layouts/app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-default">
				<div class="panel-body">
					Mes questions
				</div>
				
			</div>
			
			<table class="table">
				<tr>
					<th>Domaine</th>
					<th>Question</th>
					<th>auteur</th>
					<th>Action</th>
				</tr>
				@if($questions)
				@foreach($questions as $q)
				<tr>
					

					<td>{{$q->titre}}</td>
					<td>{{$q->contenu}}<br>


					</td>
					<td>{{$q->user_id}} {{$q->user->name}}</td>
					<td>
						<form action="{{url('delete/'.$q->id)}}" method="POST">
							{{csrf_field()}}
							{{method_field('delete')}}
							@can('delete',$q)
						<a href="{{url('question/create')}}" class="btn btn-primary pull-right ">update</a>
						@endcan
						@can('delete',$q)
						<button type="" class="btn btn-danger">Suprimer</button>
						@endcan
						</form></td>
                     </tr>
				@endforeach
				@endif
				
			</table>
		</div>
	</div>
</div>
<br>
<br>
<br>

@include('design.footer')
@endsection