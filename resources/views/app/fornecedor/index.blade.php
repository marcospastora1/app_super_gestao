<h3>Fornecedor</h3>

@php
    /* if() {executa se o resultado for true}*/
@endphp
{{-- @unless executa se o resultado for false --}}


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br />
    Status: {{ $fornecedores[2]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br />
    Telefone: {{ $fornecedores[2]['ddd'] ?? '' }} {{ $fornecedores[2]['telefone'] ?? '' }}
    <br>
    @switch($fornecedores[2]['ddd'])
        @case('27')
            Vitória - ES
        @break

        @case('73')
            Alcobaça - BA
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @default
            Estado não identificado
    @endswitch
@endisset
