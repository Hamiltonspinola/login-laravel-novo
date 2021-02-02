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
