@extends('site.layout')

@section('content')

<!--! body-autores -->
<div class="container">
    <div class="bg-light mx-auto col-6 text-white div-autores">
        <div class="row mt-5">
            <div class="col-6">
                <img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                    alt="" class="img-fluid img-autores p-3" draggable="false">
            </div>
            
            <div class="col-6 mt-4">
                <h3 class="mt-5">Mike Doe</h3>
                <span>Bloger e Desenvolvedor Web</span><br>
                <span style="font-weight: 100;">mikedoe@email.com</span>
            </div>
        </div>
    </div>

    <div class="bg-light mx-auto col-6 text-white div-autores">
        <div class="row mt-5">
            <div class="col-6">
                <img src="https://images.pexels.com/photos/1674752/pexels-photo-1674752.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                    alt="" class="img-fluid img-autores p-3" draggable="false">
            </div>
            
            <div class="col-6 mt-4">
                <h3 class="mt-5">Michelle Doe</h3>
                <span>Bloger e Escritora</span><br>
                <span style="font-weight: 100;">michelle@email.com</span>
            </div>
        </div>
    </div>
</div>

@endsection