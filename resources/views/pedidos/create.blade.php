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
                    <hr>
                    <a href="{{ route('posts.index') }}">Conferir Posts</a>
                    <hr>
                    
                    <form action="{{ route('pedidos.store') }}" method="post">
                    @csrf
                        <label for="nome">Nome:</label><br>
                        <input type="text" name="nome" id="nome"><br><br>

                        <label for="quantidade">Quantidade:</label><br>
                        <input type="number" name="quantidade" id="quantidade"><br><br>

                        <label for="data_fabric">Data de Fabricação</label><br>
                        <input type="date" name="data_fabric" id="data_fabric"><br><br>

                        <label for="data_fabric">Data de Validade</label><br>
                        <input type="date" name="data_valid" id="data_valid"><br>
                        <button type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
