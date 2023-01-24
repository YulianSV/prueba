@extends('layouts.app')

@section('content')
<div class="container" style="justify-content: center; text-align: center">
	<h1>Actualizar producto</h1>
<form action="{{route('product.update')}}" method="post">
	@csrf
	<input type="hidden" name="id" value="{{$data->id}}">
	<input type="text" name="name" value="{{$data->name}}">
	<input type="text" name="amount" value="{{$data->amount}}">
	<input type="text" name="iva" value="{{$data->iva}}">
	<button type="submit">Guardar</button>
</form>
</div>
@endsection
