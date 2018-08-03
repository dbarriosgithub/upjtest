
@extends('layout')
@section('content')

<div class="row">
	<table class="table">
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
	   @foreach($personas as $persona)	
		<tr>
			<td>{{$persona->firstname}}</td>
			<td>{{$persona->lastname}}</td>
			<td>{{$persona->email}}</td>
			<td>{{$persona->address}}</td>
			<td>{{$persona->celphone}}</td>
			<td>
				<a href="#">edit</a>
				<a href="/persona/delete/{{$persona->id}}">del</a>
			</td>
		</tr>
		@endforeach				
	</table>
</div>
@endsection
