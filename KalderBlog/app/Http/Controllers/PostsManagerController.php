<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Post;

class PostsManagerController extends Controller
{
    // * INDEX ---------------------------------|
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('postsmanager.index',compact('posts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // * CREATE ---------------------------------|
    public function create()
    {
        $autores = Autor::all();
        
        return view('postsmanager.create', compact('autores'));
    }
    // * STORE ---------------------------------|
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'tituloresumido' => 'required',
            'corpo' => 'required',
            'datapub' => 'required',
            'imagem' => 'required',          
            'autor_id' => 'required',
            
        ]);

        // Artista::create($request->all());

        // Requisitar os campos no cadastro
      $post = new Post;
      $post->titulo = $request->titulo;
      $post->tituloresumido = $request->tituloresumido;
      $post->corpo = $request->corpo;
      $post->datapub = $request->datapub;
      $post->autor_id = $request->autor_id;
      $post->imagem = ""; #opcional
        $dirImage = "images/posts";

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            // Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            // Mover a imagem
            $requestImage->move(public_path($dirImage), $imageName);
          $post->imagem = $dirImage . "/" . $imageName;
        };

      $post->save();

        return redirect()->route('postsmanager.index')->with('success','Post cadastrado com sucesso!');
    }

    // * SHOW ---------------------------------|
    public function post($id)
    {
      $post = Post::findOrFail($id);

        return view('postmanager.show',compact('post'));
    }

    // * EDIT ---------------------------------|
    public function edit($id)
    {
      $post = Post::findOrFail($id);
        $autores = Autor::all();
        
        return view('postsmanager.edit',compact('post', 'autores'));
    }

    // * UPDATE ---------------------------------|
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'tituloresumido' => 'required',
            'corpo' => 'required',
            'datapub' => 'required',
            'imagem' => 'required',          
            'autor_id' => 'required',
        ]);

        $data = $request->all();
        
        Post::findOrFail($id)->update($data);

        return redirect()->route('postsmanager.index')->with('success','Cadastro de post atualizado com sucesso!');
    }

    // * DESTROY ---------------------------------|
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route('postsmanager.index')->with('success','Cadastro de post excluído com sucesso!');
    }
}
