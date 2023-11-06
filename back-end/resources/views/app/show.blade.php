@extends('layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')


    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>- Vizualizar - Produto</p>
        </div>

        <div class="menu">
            <ul
                <li><a href="{{ route('products.create')}}">Novo</a></li>
                <li><a href="{{ route('products.index')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1"> 
                    <tr>
                        <td>ID:</td>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td>{{ $product->product_name }}</td>
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>{{ $product->category_id }}</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>{{ $product->expiration_date}}</td>
                    </tr>
                    <tr>
                        <td>Estoque</td>
                        <td>{{ $product->stock_quantity}}</td>
                    </tr>
                    <tr>
                        <td>produto perecivel</td>
                        <td>
                                    @if ($product->perishable == null)
                                        Não perecível
                                    @else
                                        {{ $product->perishable }}
                                            Produto perecível
                                    @endif
                                </td>
                    </tr>
                </table>
           
            </div>
        </div>

    </div>

    @endsection
