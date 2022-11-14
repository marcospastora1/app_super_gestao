<h3>Fornecedor</h3>

@php
    /* if() {executa se o resultado for true}*/
@endphp
{{-- @unless executa se o resultado for false --}}

@isset($fornecedores)

    @forelse ($fornecedores as $fornecedor)
        Iteração atual: {{ $loop->iteration }} <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do loop
        @endif
        @if ($loop->last)
            Última iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cdastrados
    @endforelse
@endisset
