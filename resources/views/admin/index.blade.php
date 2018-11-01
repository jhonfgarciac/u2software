@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="co--12" id="content-tabla">
<table class="table table-hover table striped" id="table">	
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Nombre de usuario</th>
			<th>Correo</th>
			<th>Ciudad</th>
			<th>Pasatiempos</th>
			<th>Opciones</th>
		</tr>	
	</thead>
	<tbody>
		@forelse($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->nameuser}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->city}}</td>
				<td>{{$user->hobbies}}</td>
				<td>
					<button class="btn btn-sm btn-primary edit-user" data-id="{{ $user->id }}">Editar</button>
				</td>
			</tr>
		@empty
			<tr><td colspan="6" class="text-center">No se encontraron usuarios</td></tr>
		@endforelse
	</tbody>
</table>
</div>
</div>
</div>



@endsection

@include('partials.modal-update')

@section('scripts')

<script type="text/javascript" src="/js/user.js"></script>


@endsection