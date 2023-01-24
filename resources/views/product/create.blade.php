@extends('layouts.app')

@section('content')
<div class="container" style="justify-content: center; text-align: center">
	<h1>Crear producto</h1>
	<form action="{{route('product.store')}}" method="post">
	@csrf
	<input type="text" name="name">
	<input type="text" name="amount">
	<input type="text" name="iva">
	<button type="submit">Guardar</button>
</form>
</div>
@endsection