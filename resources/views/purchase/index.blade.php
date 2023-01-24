@extends('layouts.app')

@section('content')
<div class="container" style="justify-content: center; text-align: center">
	<h1>Productos - Compra</h1>
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
				<a href="{{route('product.buy',['product_id'=>$product->id])}}"> Comprar</a>
				</td>
			</tr>
			@endforeach	
			@endif
		</tbody>
		</table>
	</div>
</div>
@endsection