@extends('layouts/app')


@section('content')



<div class="row">
		<div class="col-md-12">
			<h1>users</h1>
			<a href="{{ route('register') }}"  class="btn btn-success pull-right">register</a>
			<table id="table_id" class="display">
			<thead> 
				<tr>
					<th>Titre </th>
					<th>Presentation </th>
					<th>Date</th>
					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($usr as $u)
				<tr>
					<td>{{$u->name}}<br></td>
					<td>{{$u->email}}</td>
					<td>{{$u->created_at}}</td>
					<td>
						<form action="{{-- {{url('cv/'.$cv->id)}} --}}" method="POST">
							{{csrf_field()}}
							{{method_field('delete')}}
						
						<a href="{{-- {{url('update')}} --}}"  class="btn btn-primary">Detail</a>
						
						{{-- @can('update',$cv) --}}
						<a href="{{-- {{url('cv/'.$cv->id.'/edit')}} --}}" class="btn btn-default">Editer</a>
						{{-- @endcan --}}
						
						<button type="" class="btn btn-danger">Suprimer</button>
						
						</form>
					</td>
				</tr>
					@endforeach
			</tbody>
			</table>

			</a> 
            <a href = "{{-- {{url('formation/'.$cv->id.'/show')}} --}}" class = "btn btn-primary" role = "button">
               formation
            </a> 
		</div>
	</div>


@endsection
