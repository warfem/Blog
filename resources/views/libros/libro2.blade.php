@extends('libros.EskLibros')

@section('contenedor')

    <div class="container mt-3 mb-3 text-center w-50" style="background-color: rgb(219, 203, 164); ">

        <h2>El imperio Final</h2>
        <hr>
        <img src="/img/libro2.jpg" class="img-fluid text-center" style="width: 300px; height:400px"><br>
        <label><strong>Autor:</strong>Brandon Sanderson</label><br>
        <label><strong>Saga:</strong>Nacidos de la bruma</label><br>
        <label><strong>Editorial:</strong>Nova</label><br>
        <p class="text-justify m-4">
            There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered
            alteration in some form, by injected humour,or randomised words which don't look even slightly believable. If
            you are
            going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
            middle of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
            the
            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of
            model
            sentence structures,to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
            always free
            from repetition, injected humour, or non-characteristic words etc.</p>

        <!--- MODAL PARA COMPRAR LIBRO-->
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#comprarLibro"
            data-whatever="El imperio Final">Comprar</button>
        <div class="modal fade" id="comprarLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Compra Libro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                        @if (session('info'))
                            <script>
                                alert("{{ session('info') }}");

                            </script>
                        @endif
                        <!-- FORMULARIO-->
                        <form action="{{ route('storeComprar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Título:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- TERMINA MODAL-->
    </div><!-- TERMINA CONTAINER-->

    <script>
        $('#comprarLibro').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('whatever')
            var modal = $(this)
            modal.find('.modal-body #titulo').val(recipient)
        })

    </script>


    </div>

@endsection
