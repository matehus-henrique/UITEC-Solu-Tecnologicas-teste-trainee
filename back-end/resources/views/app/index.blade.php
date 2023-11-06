@extends('layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p> Listagem de produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="/">Voltar</a></li>
                <li><a href="{{ route('products.create')}}">Cadastrar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th> Data de Vencimento</th>
                            <th>Quantidade</th>
                            <th>Produto Perecível</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->product_value }}</td>
                                <td>{{ $product->expiration_date}}</td>
                                <td>{{ $product->stock_quantity}}</td>
                                <td>
                                    @if ($product->perishable == null)
                                        Não perecível
                                    @else
                                        {{ $product->perishable }}
                                         Produto perecível
                                    @endif
                                </td>
                                <td><a href="{{ route('products.show', ['product' => $product->id ]) }}"  class="view-link" >Visualizar</a></td>
                                <td><a href="{{ route('products.edit', ['product' => $product->id ]) }}" class="edit-link" >Editar</a></td>
                                <td>
                                <form method="POST" action="{{ route('products.destroy', ['product' => $product->id ]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" >Excluir</button>
                                     <!-- <a href="">Excluir</a> -->
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $products->appends($request)->links() }}

                
              
               
                <br>
                Exibindo {{ $products->count() }} fornecedores de {{ $products->total() }} (de {{ $products->firstItem() }} a {{ $products->lastItem() }})
            </div>
        </div>

    </div>

@endsection
