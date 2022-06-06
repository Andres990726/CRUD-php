@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/estudiante')}}" method="POST">
@csrf
@include('estudiante.form',['modo'=>'Guardar'])
</form>
</div>
@endsection