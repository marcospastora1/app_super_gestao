<h3>Fornecedor</h3>

@php
    /* if() {executa se o resultado for true}*/
@endphp
{{-- @unless executa se o resultado for false --}}


@isset($fornecedores)
    @php  $i = 0 @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[2]['nome'] }}
        <br />
        Status: {{ $fornecedores[2]['status'] }}
        <br />
        CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: {{ $fornecedores[2]['ddd'] ?? '' }} {{ $fornecedores[2]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
