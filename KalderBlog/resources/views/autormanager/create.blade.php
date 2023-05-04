@extends('site.layout')

@section('content')

<div class="home-container">
<h1>Criar post</h1>
<div class="home-container1" action="{{ route('postmanager.store') }}" method="POST" enctype="multipart/form-data">
    
    <div class="width100">
        <p>Nome:</p>
        <input type="input" name="nome" class="form-control" placeholder="Titulo" maxlength="50">
    </div>
    <div class="width100">
        <p>Biografia:</p>
        <input type="input" name="biografia" class="form-control" placeholder="Max 30 Caracteres" maxlength="30">
    </div>
    <div class="width100">
        <p>Foto:</p>
        <!-- Procurar input de foto -->
        <input type="input" name="foto" class="form-control" placeholder="Max 30 Caracteres" maxlength="30">
    </div>
    <div class="width100">
        <p>E-mail:</p>
        <input type="input" name="email" class="form-control" placeholder="Conteúdo da postagem" maxlength="50">
    </div>
    <div class="width100">
        <p>Senha:</p>
        <input type="input" name="titulo" class="form-control" placeholder="Titulo" maxlength="50">
    </div>
    
</div></div>






@endsection