@extends('app')

@section('titulo', 'Criar Diarista')

@section('conteudo')
    <h2>Criar Diarista</h2>
        <!-- method post ja definido no controller ! a propriedade enctype é
        para que seja possivel pega a foto-->
        <form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data">
            <!-- quando no laravel é enviado um formulario comm o method="POST",
            precisamos usar esse @ que imprime um token para ter certeza que é mesmo esse formulario -->
            @csrf

            @include('_form')

        </form>
@endsection
