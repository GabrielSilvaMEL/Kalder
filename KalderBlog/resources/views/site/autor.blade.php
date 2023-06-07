@extends('site.layout')

@section('content')

<!--! body-perfil -->
<div class="mt-5 text-center mx-auto text-white">
        <h3>{{ $autor->nome }}</h3>
        <p>{{ $autor->descabreviada }}</p>
        <p>{{ $autor->email }}</p>

        <img
            draggable="false"
            alt="pexelslaker579264111433"
            src="{{ asset($autor->imagem) }}"
            class="image-custom img-fluid mt-2"
        />

        <p class="mx-auto mt-4" style="width: 40%;">
            {!! nl2br(e($autor->biografia)) !!}
        </p>
    </div>

@endsection