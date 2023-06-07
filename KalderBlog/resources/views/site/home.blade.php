@extends('site.layout')

@section('content')

<img 
  draggable="false"
  src="https://images.pexels.com/photos/7971865/pexels-photo-7971865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
  alt=""
  class="img-fluid img-home w-100"
>

<!--! body-home -->
<div class="row r-div">
    <div class="col"></div>

    <div class="col-8">

        @foreach ($posts as $post)
        <div class="row mb-5">
            <a href="{{ route('site.postagem', $post->id) }}">
                <div class="card c-div text-white">
                    <img src="{{ asset($post->imagem) }}" alt="" class="card-img-top home-img-post">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->tituloresumido }}</h3>
                        <p class="card-text">Publicado em {{ $post->datapub }} <br> {{ $post->autor->nome }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    <div class="col"></div>
</div>

@endsection