@extends('eskIndex')

@section('contenedor')
<div class="row mt-4">

    @foreach ($comentarios as $comentario)
    <div class="text-center col-lg-4 col-md-4 col-sm-12">
        <h2>{{$comentario->titulo}} </h2>
        <hr>
         <p class="text-justify m-4">{{$comentario->comentario}}</p>
    </div>
    @endforeach
  
@endsection