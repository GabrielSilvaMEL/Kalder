@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 40%;">
    <center>
        <h1>Cadastrar Autor</h1>
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
        
    <form action="{{ route('autoresmanager.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="width100">
        <strong>Nome:</strong>
            <input type="input" name="nome" class="form-control" placeholder="Nome do autor" maxlength="50">
        </div>
        <br>
        <div class="width100">
        <strong>Descrição abreviada:</strong>
            <input type="input" name="descabreviada" class="form-control" placeholder="Nome do autor" maxlength="50">
        </div>
        <br>

        <div class="width100">
        <strong>Biografia:</strong>
            <input type="input" name="biografia" class="form-control" placeholder="Biografia" maxlength="30">
        </div>
        <br>

        <!-- //* Imagem -->
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control" placeholder="Imagem">
                </div>
            </div>
            <br>

        <div class="width100">
        <strong>E-mail:</strong>
            <input type="email" name="email" class="form-control" placeholder="nome@email.com" maxlength="50">
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