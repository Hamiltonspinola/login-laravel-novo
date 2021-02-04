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
                    
                    @if(session('message'))

                    <div class="session_message">
                        {{ session('message') }}
                    </div>

                    @endif

                    <h3>Posts</h3>
                    <hr>
                    <a href="/posts/creates">Criar Post</a>

                    @foreach($posts as $post)

                    <p>
                    {{ $post->title }}
                    [ 
                        <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
                        <a href="{{ route('posts.edit', $post->id) }}">Editar</a> |
                        <a href="{{ route('pedidos.index') }}">Inicio</a>
                    ]
                    </p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
