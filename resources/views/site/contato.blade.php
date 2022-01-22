@extends('site.layouts.basico')
@section('titulo', 'Contato')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._components.form_contato', ['classe'=>'borda-preta', 'motivo_contatos'=> $motivo_contatos])
            @endcomponent
        </div>
    </div>
</div>
@endsection
