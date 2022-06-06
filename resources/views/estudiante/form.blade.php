<br>
<h1>{{$modo}} Estudiantes</h1>

@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input id="Nombre" class="form-control"type="text" name="Nombre" 
value="{{isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre') }}">

</div>
<div class="form-group">
<label for="Apellido">Apellido</label>
<input class="form-control"type="text" name="Apellido" value="{{isset($estudiante->Apellido)?$estudiante->Apellido:old('Apellido')}}">

</div>
<div class="form-group">
<label for="Direccion">Direccion</label>
<input class="form-control"type="text" name="Direccion" value="{{isset($estudiante->Direccion)?$estudiante->Direccion:old('Direccion')}}">

</div>
<div class="form-group">
<label for="Correo">Correo</label>
<input class="form-control"type="text" name="Correo" value="{{isset($estudiante->Correo)?$estudiante->Correo:old('Correo')}}">

</div>
<div class="form-group">
<label for="celular">Celular</label>
<input class="form-control"type="text" name="celular" value="{{isset($estudiante->celular)?$estudiante->celular:old('celular')}}">

</div>
<br>
<input class= "btn btn-success" type="submit" value="{{$modo}} datos">
<a class= "btn btn-primary" href="{{url('estudiante/')}}">Regresar</a>