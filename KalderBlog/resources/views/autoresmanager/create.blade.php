@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 40%;">
    <center>
        <h1>Criar post</h1>
    </center>
        

    <form style="margin: 0 auto;">

        <div class="width100">
            <p>Nome:</p>
            <input type="input" name="nome" class="form-control" placeholder="Nome do autor" maxlength="50">
        </div>
        <div class="width100">
            <p>Biografia:</p>
            <input type="input" name="biografia" class="form-control" placeholder="" maxlength="30">
        </div>
        <div class="width100">
            <p>Foto:</p>
            <!-- Procurar input de foto -->
            <input type="input" name="foto" class="form-control" placeholder="" maxlength="30">
        </div>
        <div class="width100">
            <p>E-mail:</p>
            <input type="input" name="email" class="form-control" placeholder="nome@email.com" maxlength="50">
        </div>
        <div class="width100">
            <p>Senha:</p>
            <input type="input" name="titulo" class="form-control" placeholder="" maxlength="50">
        </div>
        
    </form>
    </div>

    
</div>






@endsection