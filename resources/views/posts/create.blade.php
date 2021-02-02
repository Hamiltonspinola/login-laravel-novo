@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach   
    </ul>
@endif


<form action="{{ route('posts.store') }}" method="post">
@csrf
<label for="title">Título</label><br>
<input type="text" name="title" id="title" value="{{ old('title') }}"><br><br>

<label for="title">Conteúdo</label><br>
<textarea name="content" id="content" cols="30" rows="5" placeholder="Conteúdo..." >{{ old('content') }}</textarea><br>
<button type="submit">Enviar</button>

</form>
<br>
<a href="{{ route('posts.index') }}">Início</a>
