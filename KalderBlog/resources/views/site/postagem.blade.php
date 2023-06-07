@extends('site.layout')

@section('content')

<!--! body-post -->
<div class="mt-5 text-center mx-auto text-white">
    <h3 class="col-6 mx-auto">{{ $post->titulo }}</h3>
    <p><span class="bolder">{{ $post->autor->nome }}</span> | {{ $post->autor->email }} | {{ $post->datapub }}</p>

    <img
        draggable="false" 
        src="{{ asset($post->imagem) }}" 
        alt=""
        class="image-fluid img-post"
    >

    <p class="mx-auto text-start mt-4" style="width: 40%;">
        {!! nl2br(e($post->corpo)) !!}
    </p>
</div>

@endsection