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
    <a href="{{ route('posts.edit', $post->id) }}">Editar</a> 
]
</p>

@endforeach