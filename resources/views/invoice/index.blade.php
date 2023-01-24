@extends('layouts.app')

@section('content')
<div class="container" style="justify-content: center; text-align: center">
	<h1>Facturación</h1>
	<div >
	
	<form action="{{route('product.invoice')}}" method ="post">
		@csrf
			<select name="user_id">
			@if($users)
			@foreach($users as $user)
			<option value="{{$user->id}}">{{$user->name}} - {{$user->email}}</option>
			@endforeach
			@endif
		</select>
		<button type="submit">Generar facturas</button>
	</form>
	</div>
</div>
@endsection