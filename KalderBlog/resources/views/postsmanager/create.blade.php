@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Cadastrar Post</h1>
    </center>
    
    <hr class="my-4">

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
        
    <form action="{{ route('postsmanager.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="width100">
        <strong>Título:</strong>
            <input type="input" name="titulo" class="form-control" placeholder="Título do post" maxlength="50">
        </div>
        <br>

        <div class="width100">
        <strong>Titulo Resumido:</strong>
            <input type="input" name="tituloresumido" class="form-control" placeholder="Titulo resumido" maxlength="50">
        </div>
        <br>

        <div class="width100">
        <strong>Corpo:</strong>
            <input type="input" name="corpo" class="form-control" placeholder="Corpo do post" maxlength="50">
        </div>
        <br>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagem:</strong>
                <input type="file" name="imagem" class="form-control" placeholder="Imagem">
            </div>
        </div>
        <br>
        <!-- //* Autor -->
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor: </strong>
                    <select class="form-control" type="input" name="autor_id">
                        @foreach ($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->nome}}</option>
                        
                        @endforeach
                    </select>

                    <select class="form-control" type="input" name="autor_nome" hidden>
                        @foreach ($autores as $autor)
                        <option value="{{ $autor->nome}}" hidden>{{ $autor->nome }}</option>
                        
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <strong>Data de publicação:</strong>
                <p>{{ date('Y-m-d') }}</p>
                <input type="input" value="{{ date('Y-m-d') }}" name="datapub" class="form-control" hidden>
            </div>
        </div>

        <hr class="my-4">

        <!-- //? Cadastrar -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('autoresmanager.index') }}"> Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar</button>
                    
        </div>
    </form>
    </div>

</div>  
</div>






@endsection