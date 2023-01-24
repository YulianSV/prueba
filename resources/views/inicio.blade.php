@extends('layouts.app')

@section('content')
<div class="container">
<h1>
@guest

 @else
 <h1>Bienvenido</h1>
@endguest
</h1>
@endsection