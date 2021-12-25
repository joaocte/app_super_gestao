<h3> FORNECEDORES </h3>

{{ 'Texto' }} 
 <?='Texto' ?>
{{--Comentário no blate--}}
@php
    /*bloco php*/
@endphp


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif