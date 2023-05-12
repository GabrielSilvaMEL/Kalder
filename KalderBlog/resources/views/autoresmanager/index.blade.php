@extends('site.layout')

@section('content')
<center>

<!-- PAGINA NAO FUNCIONARÁ ATÉ A CRIAÇÃO DO BANCO DE DADOS -->

<div class="index-container">
    <div class="index-container1">
      <div class="index-container2">
        <h1>Perfis Cadastrados</h1>
        <div class="index-container3">
          <a class="btn btn-primary" href="{{ route('autoresmanager.create') }}">Cadastrar Novo</a>
        </div>
      </div>
      <div class="index-container4">
        <div class="index-container5" action="{{ route('autoresmanager.destroy', $autor->id) }}" method="POST">
          <img
            alt="image"
            src="https://play.teleporthq.io/static/svg/default-img.svg"
            class="index-image"
          />
          <button class="btn btn-primary" href="{{ route('autoresmanager.show', $autor->id) }}">Exibir</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        <div class="index-container6">
          <p>Nome:</p> {{ $autor->nome }}
          <p>Biografia:</p> {{ $autor->biografia }}
        </div>
      </div>
    </div>
  </div>

</center>  

@endsection