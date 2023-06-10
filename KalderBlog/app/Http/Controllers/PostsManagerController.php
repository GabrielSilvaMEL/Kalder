<?php

// Referências/Dependências
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Post;

class PostsManagerController extends Controller
{
    // Index (página de exibição de posts cadastrados)
    public function index()
    {
      $posts = Post::latest()->paginate(5);
      return view('postsmanager.index',compact('posts'))
                  ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Create (inclusão de cadastro de posts)
    public function create()
    {
        $autores = Autor::all();
        return view('postsmanager.create', compact('autores'));
    }

    // Store (armazenamento das informações de cadastro)
    public function store(Request $request)
    {
      $request->validate([
          'titulo' => 'required',
          'tituloresumido' => 'required',
          'corpo' => 'required',
          'datapub' => 'required',
          'imagem',          
          'autor_id' => 'required',
      ]);

      # Requisitar os campos no cadastro
      $post = new Post;
      $post->titulo = $request->titulo; #obrigatório
      $post->tituloresumido = $request->tituloresumido; #obrigatório
      $post->corpo = $request->corpo; #obrigatório
      $post->datapub = $request->datapub; #obrigatório
      $post->autor_id = $request->autor_id; #obrigatório
      $post->imagem = ""; #opcional
      $dirImage = "images/posts";

      # Tratamento da imagem
      if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
          $requestImage = $request->imagem;
          $extension = $requestImage->extension();

          # Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
          $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
          
          # Mover a imagem
          $requestImage->move(public_path($dirImage), $imageName);
          $post->imagem = $dirImage . "/" . $imageName;
      };

      $post->save();
      return redirect()->route('postsmanager.index')->with('success','Post cadastrado com sucesso!');
    }

    // Show (exibição de cadastro individual do post)
    public function show($id)
    {
      $post = Post::findOrFail($id);
      return view('postsmanager.show',compact('post'));
    }

    // Edit (edição das informações de cadastro de posts)
    public function edit($id)
    {
      $post = Post::findOrFail($id);
      $autores = Autor::all();
      return view('postsmanager.edit',compact('post', 'autores'));
    }

    // Update (atualização recorrente da edição de cadastro de posts)
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

    // Destroy (exclusão de cadastro)
    public function destroy($id)
    {
      Post::findOrFail($id)->delete();
      return redirect()->route('postsmanager.index')->with('success','Cadastro de post excluído com sucesso!');
    }
}
