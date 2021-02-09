@extends('eskIndex')

@section('contenedor')

<div class="container text-center">
    <!-- Para saber los errores-->
    @if ($errors->any())
        <div class="alert alert-danger mt-2">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Si se envío todo bien ventana de ok-->
    @if (session('mensaje'))
        <div class="alert alert-succes mt-2">
            <p>{{ session('mensaje') }}</p>
        </div>
    @endif

        <form action="{{ route('comentarios') }}" method="post">
            @csrf

            <div class="from-group ">
                <label for="titulo">Título:</label>
                <input type=" text" class="form-control mx-auto" style="width: 500px" name="titulo" value="{{old('titulo')}}">
            </div>
            <div class="from-group">
                <label for="comentario">Comentario:</label><br>
                <textarea name="comentario" class="" id="" cols="60" rows="10" value="{{old('comentario')}}"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary mb-2">Añadir</button>

        </form>
    </div>
@endsection
