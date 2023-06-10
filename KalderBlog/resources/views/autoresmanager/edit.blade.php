@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 40%;">
    <center>
        <h1>Editar Cadastro de Autor</h1>
    </center>

    <hr class="my-4">

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
                <!-- Nome Artístico -->
                <div class="width100 mb-4">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $autor->nome }}" class="form-control" placeholder="John Doe" maxlength="50">
                </div>
                <br>

                <!-- Descrição -->
                <div class="width100 mb-4">
                    <strong>Biografia:</strong>
                    <textarea class="form-control" style="height:150px" value="{{ $autor->biografia }}" name="biografia" placeholder="Músico e DJ" maxlength="500">{{ $autor->biografia }}</textarea>
                </div>
                <br>

                <!-- Profissão -->
                <div class="width100 mb-4">
                    <strong>Profissão:</strong>
                    <input type="text" class="form-control" value="{{ $autor->descabreviada }}" name="descabreviada" placeholder="Biografia breve do autor" maxlength="500">
                </div>
                <br>

                <!-- Imagem -->
                <div class="width100 mb-4">
                    <strong>Imagem:</strong>
                    <input type="text" name="imagem" value="{{ $autor->imagem }}" class="form-control">
                </div>
                <br>

                <!-- E-mail -->
                <div class="width100 mb-4">
                    <strong>E-mail:</strong>
                    <input type="email" name="email" value="{{ $autor->email}}" class="form-control" placeholder="johndoe@email.com">
                </div>
                <br>

                <!-- Atualizar -->
                <div class="width100 mb-4">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>






@endsection