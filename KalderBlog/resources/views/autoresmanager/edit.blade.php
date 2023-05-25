@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Editar Cadastro de autor</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('autoresmanager.index') }}"> Voltar</a>
    <p></p>
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

    <form action="{{ route('autoresmanager.update', $autor) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

            <!-- //* Nome Artístico -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome_artistico" value="{{ $autor->nome_artistico }}" class="form-control" placeholder="Nome" maxlength="50">
                </div>
            </div>

            <!-- //* Descrição -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Biografia:</strong>
                    <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição" maxlength="500">{{ $autor->biografia }}</textarea>
                </div>
            </div>

            <!-- //* Imagem -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="text" name="imagem" value="{{ $autor->imagem }}" class="form-control">
                </div>
            </div>

            <!-- //? Atualizar -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>

    </form>
</div>






@endsection