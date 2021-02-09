@extends('eskindex')

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

        <form action="{{ route('storeEmail') }}" method="post">
            @csrf

            <div class="from-group ">
                <label for="nombre">Nombre:</label>
                <input type=" text" class="form-control mx-auto" style="width: 500px" name="nombre" value="{{old('nombre')}}">
            </div>
            <div class="from-group ">
                <label for="email">Email:</label>
                <input type="email" class="form-control mx-auto" style="width: 500px" name="email" value="{{old('email')}}">
            </div>   

            <div class="from-group">
                <label for="texto">Sugerencia:</label><br>
                <textarea name="mensaje"  id="" cols="60" rows="10" value="{{old('texto')}}"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary mb-2">Añadir</button>
          
        </form>
    </div>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection