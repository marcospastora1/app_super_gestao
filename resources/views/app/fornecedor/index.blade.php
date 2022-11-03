<h3>Fornecedor</h3>

@php
    /* if() {executa se o resultado for true}*/
@endphp
{{-- @unless executa se o resultado for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br />
@unless($fornecedores[0]['status'] == 'S')
    {{-- Se o retorno da conição for false --}}
    Fornecedor inativo
@endunless
