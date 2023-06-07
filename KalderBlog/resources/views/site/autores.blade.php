@extends('site.layout')

@section('content')

<!--! body-autores -->
<div class="container">

    @foreach ($autores as $autor)
    <div class="bg-light mx-auto col-6 text-white div-autores">
        <div class="row mt-5">
            <div class="col-6">
                <img src="{{ asset($autor->imagem) }}" 
                    alt="" class="img-fluid img-autores p-3" draggable="false">
            </div>
            
            <div class="col-6 mt-4">
                <h3 class="mt-5">{{ $autor->nome }}</h3>
                <span>{{ $autor->descabreviada }}</span><br>
                <span style="font-weight: 100;">{{ $autor->email }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection