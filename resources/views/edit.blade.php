@extends('app')

@section('titulo', 'Editar Diarista')

@section('conteudo')
    <h2>Editar Diarista</h2>
        <!-- method post ja definido no controller ! a propriedade enctype é
        para que seja possivel pega a foto-->
        <form action="{{ route('diaristas.update', $diarista) }}" method="POST" enctype="multipart/form-data">
            <!-- quando no laravel é enviado um formulario comm o method="POST",
            precisamos usar esse @ que imprime um token para ter certeza que é mesmo esse formulario -->
            @method('PUT')

            @include('_form')
                <button type="submit" class="btn btn-danger">Voltar</button>

        </form>
@endsection
