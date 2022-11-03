<h3>Fornecedor</h3>

@php
    /* if() {executa se o resultado for true}*/
@endphp
{{-- @unless executa se o resultado for false --}}


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset
