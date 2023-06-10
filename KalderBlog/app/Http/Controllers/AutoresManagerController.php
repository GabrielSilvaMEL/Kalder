<?php

// Referências/Dependências
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresManagerController extends Controller
{
    // Index (página de exibição de autores cadastrados)
    public function index()
    {
        $autores = Autor::latest()->paginate(5);
        return view('autoresmanager.index',compact('autores'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Create (inclusão de cadastro de autores)
    public function create()
    {
        return view('autoresmanager.create');
    }

    // Store (armazenamento das informações de cadastro)
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'biografia' => 'required',
            'descabreviada' => 'required',
            'imagem' => 'required',
            'email' => 'required',
        ]);

        # Requisitar os campos no cadastro
        $autor = new Autor;
        $autor->nome = $request->nome; #obrigatório
        $autor->descabreviada = $request->descabreviada; #obrigatório
        $autor->biografia = $request->biografia; #obrigatório
        $autor->imagem = ""; #opcional
        $autor->email = $request->email; #obrigatório
        $dirImage = "images/autores";

        # Tratamento da imagem
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            # Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            # Mover a imagem
            $requestImage->move(public_path($dirImage), $imageName);
            $autor->imagem = $dirImage . "/" . $imageName;
        };

        $autor->save();
        return redirect()->route('autoresmanager.index')->with('success','Autor cadastrado com sucesso!');
    }

    // Edit (edição das informações de cadastro de autores)
    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autoresmanager.edit',compact('autor'));
    }

    // Update (atualização recorrente da edição de cadastro de autores)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'biografia' => 'required',
            'descabreviada' => 'required',
            'imagem' => 'required',
            'email' => 'required',
        ]);

        $data = $request->all();
        Autor::findOrFail($id)->update($data);
        return redirect()->route('autoresmanager.index')->with('success','Cadastro de autor atualizado com sucesso!');
    }

    // Show (exibição de cadastro individual de autor)
    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autoresmanager.show',compact('autor'));
    }

    // Destroy (exclusão de cadastro)
    public function destroy($id)
    {
        Autor::findOrFail($id)->delete();
        return redirect()->route('autoresmanager.index')->with('success','Cadastro de autor excluido com sucesso!');
    }
}
