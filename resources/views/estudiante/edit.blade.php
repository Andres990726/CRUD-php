@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/estudiante/'.$estudiante->id)}}">
@include('estudiante.form',['modo'=>'Editar'])
@csrf
{{method_field('PATCH')}}
</form>
</div>
@endsection
