@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 40%;">
    <center>
        <h1>Cadastrar Autor</h1>
    </center>
    <div class="jumbotron">

    <hr class="my-4">
</div>
<div class="container">
     
    @if ($errors->any())
        <p></p>
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
<!-- 70% Pronto. Faltando add imagem, e-mail e senha -->
    <form style="margin: 0 auto;">

        <div class="width100">
            <p>Nome:</p>
            <input type="input" name="nome" class="form-control" placeholder="Nome do autor" maxlength="50">
        </div>
        <div class="width100">
            <p>Biografia:</p>
            <input type="input" name="biografia" class="form-control" placeholder="" maxlength="30">
        </div>
        <div class="width100">
            <p>Foto:</p>
            <!-- Procurar input de foto -->
            <input type="input" name="foto" class="form-control" placeholder="" maxlength="30">
        </div>
        <div class="width100">
            <p>E-mail:</p>
            <input type="input" name="email" class="form-control" placeholder="nome@email.com" maxlength="50">
        </div>
        <div class="width100">
            <p>Senha:</p>
            <input type="input" name="titulo" class="form-control" placeholder="" maxlength="50">
        </div>
        <hr class="my-4">

        <!-- //? Cadastrar -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a class="btn btn-primary" href="{{ route('autoresmanager.index') }}"> Voltar</a>
            </div>
    </form>
    </div>

    
</div>






@endsection