<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }
    public function creates(){
        return view('posts.create');
    }
    public function store(StoreUpdatePost $request){
        Post::create($request->all());
        return redirect()->route('posts.index')
                         ->with('message', 'Post criado com sucesso');
    }
     public function show($id){
      $post = Post::where('id', $id)->first();
          $post = Post::find($id);

           if (!$post) {
               return redirect()->route('posts.index');
           }
 
           return view('posts.show', compact('post'));
     }
     public function destroy($id){
         
         if(!$posts = Post::find($id)){
             return redirect()->route('posts.index');
         }
         dd('caindo aqui');
             $posts->delete();
             return redirect()
                            ->route('posts.index')
                            ->with('message', 'Post apagado com sucesso');
         
     }
     public function edit($id){
        
        if(!$posts = Post::find($id)){
            return redirect()->route('posts.index');
        }
        return view('posts.edit', compact('posts'));
     }
     public function update(StoreUpdatePost $request ,$id){

        if(!$posts = Post::find($id)){
            return redirect()->route('posts.index');
        }
        $posts->update($request->all());

        return redirect()
                            ->route('posts.index')
                             ->with('message', 'Post atualizado com sucesso');
     }
}
