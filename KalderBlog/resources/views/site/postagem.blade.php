@extends('site.layout')

@section('content')

<!--! body-post -->
<div class="mt-5 text-center mx-auto text-white">
    <h3>TÍTULO DA POSTAGEM</h3>
    <p><span class="bolder">John Doe</span> | johndoe@email.com | 28/04/23</p>

    <img
        draggable="false" 
        src="https://images.pexels.com/photos/2091383/pexels-photo-2091383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
        alt=""
        class="image-fluid img-post"
    >

    <p class="mx-auto text-start mt-4" style="width: 40%;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Donec ac nibh non felis bibendum viverra. Nam id elit quis 
        urna faucibus consectetur ut et libero. Etiam aliquet velit 
        ac malesuada scelerisque. Class aptent taciti sociosqu ad litora 
        torquent per conubia nostra, per inceptos himenaeos. Sed vitae erat 
        a libero tempor pellentesque. Suspendisse blandit congue mauris, 
        eget egestas erat tempus ultrices. Phasellus quis mi sed sapien 
        fermentum malesuada ut at ligula. Ut libero sapien, rhoncus id luctus 
        in, luctus eget nibh.

        <br><br>
        Aliquam at urna ut nisl blandit vehicula. Mauris ac fringilla turpis. 
        Curabitur est mi, feugiat vel tellus a, aliquam luctus massa. 
        Donec mi ex, gravida vitae pulvinar id, pulvinar eget felis. 
        Praesent vitae felis ornare erat egestas pellentesque vitae at quam. 
        Mauris ultrices vitae quam et pharetra. Sed eu massa et arcu interdum 
        dictum id lobortis purus. In eleifend commodo nunc lacinia faucibus. 
        Mauris quis sem posuere, fermentum urna sed, sollicitudin enim.
    </p>
</div>

@endsection