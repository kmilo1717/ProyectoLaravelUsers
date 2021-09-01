@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Gestionar</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($usersfind as $user)
                            <tr>
                                <td>{{ $user->iteration }}</th>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->apellido }}</td>
                                <td>{{ $user->edad }}</td>
                                <td>{{ $user->ciudad }}</td>
                                <td>  
                                    <a href="{{route('usuario.edit', ['id'=> $user->id])}}"><i class="bi bi-pencil-square"></i>  Editar</a>                                             
                               </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <br>
                <a href="{{ route('usuario.create') }}" class="btn btn-dark mx-auto">Registrar cursos</a>
                <br> <br>
                @if (session('message'))
                            <div class="alert alert-success" id="infalert" role="alert">
                                {{ session('message') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    $('#infalert').fadeOut(1000);
                                }, 5000);

                            </script>
                        @endif
            </div>
        </div>
    </div>
@endsection