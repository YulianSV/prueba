@extends('layouts.app')

@section('content')
@if(isset($invoice))
<h1>Factura de {{$invoice->id}}</h1>
@else
<h1>Facturas</h1>
@endif
<div class="container">
	<div class="table-responsive">
			<table>
		<thead>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Impuesto</th>
		</tr>
		</thead>
		<tbody>
			@if($data)
			@foreach($data as $product)
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
				
			</tr>
			@endforeach	
			@endif
		</tbody>
		</table>
	</div>
</div>
@endsection