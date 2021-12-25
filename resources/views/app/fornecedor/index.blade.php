<h3>Fornecedor</h3>

@php
    /*
    if(!condicao) {} //enquanto executa se o retorno for true
    */
    /*
    if(isset($variavel)) {} //retornar true se a variável estiver definida
    */
    /*
    if(empty($variavel)) {} //retornar true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */

@endphp

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless
<br>


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Cnpj não informado' }}
    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possui o valor null
    -->
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não indentificado
    @endswitch
@endisset

@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
         @switch($fornecedores[$i]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não indentificado
    @endswitch
    <hr>

    @endfor
@endisset