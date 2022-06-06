@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
    @endif

<a class="btn btn-primary" href="{{url('estudiante/create')}}">Registrar estudiante</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Estudiantes as $Estudiante)

        <tr>
            <td>{{$Estudiante->Nombre}}</td>
            <td>{{$Estudiante->Apellido}}</td>
            <td>{{$Estudiante->Direccion}}</td>
            <td>{{$Estudiante->Correo}}</td>
            <td>{{$Estudiante->celular}}</td>
            <td>
                <a class="btn btn-primary" href="{{url('/estudiante/'.$Estudiante->id.'/edit')}}">Edit</a>
            <form class="d-inline" method="post" action="{{url('/estudiante/'.$Estudiante->id)}}">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-primary" type="submit" onclick="return confirm('¿Quieres borrar?')"
             value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $Estudiantes->links() !!}
</div>
@endsection