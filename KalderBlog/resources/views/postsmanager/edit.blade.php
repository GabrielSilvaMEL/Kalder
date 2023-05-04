@extends('site.layout')

@section('content')
<div class="home-container">
<h1>Editar Post</h1>
<div class="home-container1">
    
    <div class="width100">
        <p>Título:</p>
        <input type="input" name="titulo" class="form-control" placeholder="Titulo" maxlength="50">
    </div>
    <div class="width100">
        <p>Título Resumido:</p>
        <input type="input" name="tituloresumido" class="form-control" placeholder="Max 30 Caracteres" maxlength="30">
    </div>
    <div class="width100">
        <p>Corpo:</p>
        <input type="input" name="corpo" class="form-control" placeholder="Conteúdo da postagem" maxlength="50">
    </div>
    <div class="width100">
        <p>Foto:</p> 
        <!-- procurar input de foto -->
        <input type="input"  class="form-control" placeholder="Titulo" maxlength="50">
    </div>
    <p>Data atual:</p>
</div></div>



@endsection