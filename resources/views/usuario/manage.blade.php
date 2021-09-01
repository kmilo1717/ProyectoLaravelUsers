@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestionar Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{route('usuario.update')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$usuario->id}}" />
                        <div class="form-group">
                            <label for="name" >Nombre: </label>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{old('name', $usuario->nombre)}}" required>
                          </div>
                          <div class="form-group">
                            <label for="surname">Apellido: </label>
                            <input class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" name="surname" value="{{old('surname', $usuario->apellido)}}" required>
                          </div>
                          <div class="form-group">
                            <label for="age">Edad: </label>
                            <input class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" type="number" name="age" value="{{old('age', $usuario->edad)}}" required>
                          </div>
                          <div class="form-group">
                            <label for="city">Ciudad: </label>
                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" value="{{old('city', $usuario->ciudad)}}" required>
                          </div>
                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 d-inline-block">
                                <button type="submit" class="btn btn-info">
                                    Actualizar
                                </button>
                                <a href="{{route('usuario.delete', ['id'=> $usuario->id])}}" class="btn btn-danger ml-3">Eliminar</a>
                            </div>                 
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection