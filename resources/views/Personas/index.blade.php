
 @extends('layout')
 @section('content')
 
 @if(session('alert_type'))
	<div class="alert {{session('alert_type')}} alert-dismissible fade show">
		{{session('message')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
 @endif

<div class="row justify-content-center">
  <div class="col-md-10">
	<table class="table mt-2">
	   <thead class="thead-dark">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Direccion</th>
			<th>Celular</th>
			<th>Acciones</th>
		</tr>
	   </thead>
	   <tbody>
	   @foreach($personas as $persona)	
		<tr>
			<td>{{$persona->firstname}}</td>
			<td>{{$persona->lastname}}</td>
			<td>{{$persona->email}}</td>
			<td>{{$persona->address}}</td>
			<td>{{$persona->celphone}}</td>
			<td>
			  <a href="#">edit</a>
			  <a href="/personas/delete/{{$persona->id}}">del</a>
			</td>
		</tr>
		@endforeach	
		</tbody>			
	</table>
  </div>
</div>
@endsection
