@extends('site.layout')

@section('content')
<div>
  <link href="./index.css" rel="stylesheet" />
  <div class="index-container">
    <div class="index-container1">
      <div class="index-container2">
        <h1>Perfis Cadastrados</h1>
        <div class="index-container3">
          <button class="btn btn-success">Cadastrar novo</button>
          <button class="btn btn-danger">Voltar</button>
        </div>
      </div>
      <div class="index-container4">
        <img
          src="https://play.teleporthq.io/static/svg/default-img.svg"
          alt="image"
          class="index-image"
        />
        <div class="index-container5">
          
            <p>Nome: </p>
            <p>Biografia: </p> 
          
        </div>
      </div>
    </div>
  </div>
</div>




@endsection