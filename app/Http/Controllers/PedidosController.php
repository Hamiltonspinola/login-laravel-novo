<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Post;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {   $pedidos = Pedidos::get();
        $posts   = Post::get();
        return view('pedidos.index', compact('pedidos', 'posts'));
    }
    public function create(){
        return view('pedidos.create');
    }
    public function store(Request $request){
        Pedidos::create($request->all());
        return redirect()->route('pedidos.index')
                         ->with('message', 'Post criado com sucesso');
    }
    public function show($id){
        #Buscando todos os pedidos pelo primeiro id
        $pedido = Pedidos::where('id', $id)->first();
        #Trazendo todos os campos pelo seu id.
        $pedido = Pedidos::find($id);

        if(!$pedido){
            return redirect()->route('pedidos.index');
        }
        return view('pedidos.show', compact('pedido'));
    }
    public function destroy($id){
        $pedido = Pedidos::where('id', $id)->first();
        $pedido = Pedidos::find($id);

        if(!$pedido){
            return redirect()->route('pedidos.index');
        }
            $pedido->delete();
            return redirect()->route('pedidos.index')
                             ->with('message', 'Post apagado com sucesso');
    }
    public function edit($id){

        if(!$pedido = Pedidos::find($id)){
            return redirect()->route('pedidos.index');
        }
        return view('pedidos.edit', compact('pedido'));
    }
    public function update(Request $request, $id){
        if(!$pedido = Pedidos::find($id)){
            return redirect()->route('pedidos.index');
        }
        $pedido->update($request->all());
        return redirect()->route('pedidos.index')
                         ->with('message', 'Post atualizado com sucesso');
    }
}
