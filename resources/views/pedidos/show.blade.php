<h1>Detalhes do pedido {{ $pedido->nome }}</h1>

<ul>
    <li><strong>Nome do pedido:</strong>       {{ $pedido->nome }}</li>
    <li><strong>Quantidade do Pedido:</strong> {{ $pedido->quantidade }}</li>
    <li><strong>Data de Fabricação:</strong>   {{ $pedido->data_fabric }}</li>
    <li><strong>Data de Fabricação:</strong>   {{ $pedido->data_valid }}</li>
</ul>
<form action="{{ route('pedidos.destroy', $pedido->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o pedido: {{ $pedido->id }}</button>
</form>