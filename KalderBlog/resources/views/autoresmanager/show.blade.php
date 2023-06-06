@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Cadastro do autor {{ $autor->nome }}</h1>
    </center>

    <hr class="my-4">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- //* Nome-->
            <strong>Nome:</strong>
            {{ $autor->nome }}
        </div>
        

        <!-- //* Descrição -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Biografia:</strong>
                {{ $autor->biografia }}
            </div>
        </div>
        <!-- //* descabreviada -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição abreviada:</strong>
                {{ $autor->descabreviada }}
            </div>
        </div>
        <!-- //* Imagem -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $autor->imagem }}
            </div>
        </div>
        <!-- //* Email -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ $autor->email}}
            </div>
        </div>
        

        <center>
        <a class="btn btn-primary" href="{{ route('autoresmanager.index') }}"> Voltar</a>
        </center>
</div>

</div>
@endsection
