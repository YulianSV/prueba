@extends('layouts.app')

@section('content')
<h1>Listado de productos</h1>
<a href="{{route('product.create')}}">Crear</a>
<div class="container" style="justify-content: center; text-align: center">
	<div class="table-responsive">

			<table>
		<thead>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Impuesto</th>
			<th>Opciones</th>
		</tr>
		</thead>
		<tbody>
			@if($products)
			@foreach($products as $product)
			<tr>
				<td>
					{{$product->id}}
				</td>
				<td>
					{{$product->name}}
				</td>
				<td>
					{{$product->amount}}
				</td>
				<td>
					{{$product->iva}}
				</td>
				<td>
					<a href="{{route('product.edit',['id'=>$product->id])}}"> Actualizar</a>
<a href="{{route('product.destroy',['id'=>$product->id])}}"> Eliminar</a>

				</td>
			</tr>
			@endforeach	
			@endif
		</tbody>
		</table>
	</div>
</div>
@endsection