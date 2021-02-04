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
                    
<h1>Editando o post <strong>{{ $pedido->nome }}</strong></h1>

<form action="{{ route('pedidos.update', $pedido->id) }}" method="post">
@csrf
@method('put')
<label for="title">Nome: </label><br>
<input type="text" name="title" id="title" value="{{ $pedido->nome }}"><br><br>

<label for="title">Quantidade: </label><br>
<input type="number" name="quantidade" id="quantidade" value="{{ $pedido->quantidade }}"><br><br>

<label for="data_fabric">Data de Fabricação: </label><br>
<input type="date" name="data_fabric" id="data_fabric" value="{{ $pedido->data_fabric }}"><br><br>

<label for="data_fabric">Data de Validade: </label><br>
<input type="date" name="data_valid" id="data_valid" value="{{ $pedido->data_valid }}"><br>

<button type="submit">Editar</button>

</form>
<br>
<a href="{{ route('pedidos.index') }}">Início</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

