@extends('site.layout.basico')
@section('titulo', $titulo)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layout._components.form_contato')
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layout._partials.rodape')
@endsection
