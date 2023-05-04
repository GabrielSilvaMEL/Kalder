@extends('site.layout')

@section('content')
<div class="index-container">
    <div class="index-container1">
      <div class="index-container2">
        <h1>Perfis Cadastrados</h1>
        <div class="index-container3">
          <button class="btn btn-primary">Cadastrar Novo</button>
          
        </div>
      </div>
      <div class="index-container4">
        <div class="index-container5">
          <img
            alt="image"
            src="https://play.teleporthq.io/static/svg/default-img.svg"
            class="index-image"
          />
          <button class="btn btn-primary">Editar</button>
          <button class="btn btn-danger">Excluir</button>
        </div>
        <div class="index-container6">
          <p>Nome:</p>
          <p>Biografia:</p>
        </div>
      </div>
    </div>
  </div>



@endsection