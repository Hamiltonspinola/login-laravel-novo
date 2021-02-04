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
                    Editando...
                    
<h1>Editando o post {{ $posts->title }}</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach   
    </ul>
@endif


<form action="{{ route('posts.update', $posts->id) }}" method="post">
@csrf
@method('put')
<label for="title">Título</label><br>
<input type="text" name="title" id="title" value="{{ $posts->title }}"><br><br>

<label for="title">Conteúdo</label><br>
<textarea name="content" id="content" cols="30" rows="5" placeholder="Conteúdo..." >{{ $posts->content }}</textarea><br>
<button type="submit">Editar</button>

</form>
<br>
<a href="{{ route('posts.index') }}">Início</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

