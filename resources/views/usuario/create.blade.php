@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar usuario</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('usuario.save')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name" >Nombre: </label>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{old('name')}}" required>
                              </div>
                              <div class="form-group">
                                <label for="surname">Apellido: </label>
                                <input class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" name="surname" value="{{old('surname')}}" required>
                              </div>
                              <div class="form-group">
                                <label for="age">Edad: </label>
                                <input class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" type="number" name="age" value="{{old('age')}}" required>
                              </div>
                              <div class="form-group">
                                <label for="city">Ciudad: </label>
                                <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" value="{{old('city')}}" required>
                              </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection