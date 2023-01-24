@extends('layouts.app')

@section('content')
<h1>Listado de facturas</h1>
<div class="container" style="justify-content: center; text-align: center">
	<div class="table-responsive">
			<table>
		<thead>
		<tr>
			<th>Usuario</th>
			<th>Código de factura</th>
			<th>Monto total</th>
			<th>Fecha</th>
            <th>Opciones</th>
	
			
		</tr>
		</thead>
		<tbody>
			@if($invoices)
			@foreach($invoices as $invoice)
			<tr>
				<td>
					{{$invoice->email}}
				</td>
				<td>
					{{$invoice->id}}
				</td>	
				<td>
					{{$invoice->total_amount}}
				</td>	
				<td>
					{{$invoice->created_at}}
				</td>	
				<td>
				<a href="{{route('product.invoice2',["user_id"=>$invoice->userId])}}">Ver</a>
				</td>
			</tr>
			@endforeach	
			@endif
		</tbody>
		</table>
	</div>
</div>
@endsection