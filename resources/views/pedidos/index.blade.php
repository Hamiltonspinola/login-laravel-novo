<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Você está logado!
                    <br>
                    @if(session('message'))

                    <div class="session_message">
                        {{ session('message') }}
                    </div>

                    @endif
                    <hr>
                    <h4>Pedidos</h4><br>
                    @foreach($pedidos as $pedido)                        
                        <p>
                        <strong>{{ $pedido->nome }}</strong>
                        [
                        <a href="{{ route('pedidos.show', $pedido->id) }}">Ver detalhes</a> |
                        <a href="{{ route('pedidos.edit', $pedido->id) }}">Editar</a>                                           
                        ]
                        </p>
                        @endforeach
                        <br>
                        <a href="{{ route('pedidos.create') }}">Fazer pedido</a>                         
                        <br>
                        <hr>
                        <h4>Posts</h4><br>
                    @foreach($posts as $post)                        
                        <p>
                        <strong>{{ $post->title }}</strong>
                        [
                        <a href="{{ route('posts.show', $post->id) }}">Ver detalhes</a> |
                        <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
                        ]
                        </p>
                    @endforeach
                    <br>
                    <a href="{{ route('posts.creates') }}">Criar Post</a>
                    <hr>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
