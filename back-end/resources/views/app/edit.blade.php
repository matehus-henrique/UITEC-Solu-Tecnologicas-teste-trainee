@extends('layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')


    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>- Editar - Produto</p>
        </div>

        <div class="menu">
            <ul
                <li><a href="{{ route('products.create')}}">Novo</a></li>
                
                <li><a href="{{ route('products.index')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="post" action="{{ route('products.update', ['product'=> $product->id])}}">
                 @csrf
                 @method('PUT')
            <div class="form-group">
                <label for="product_name">Nome do Produto</label>
                <input type="text" name="product_name" value="{{$product->product_name ?? old('product_name') }}" class="form-control" id="product_name" required>
                
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select name="category_id"  class="form-control" id="category_id" required>
                     @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ ( $product->$category->id ?? old('category_id')) == $category->id ? 'selectes' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
              
                
            </div>

            <div class="form-group">
                <label for="product_value">Valor do Produto</label>
                <input type="number" name="product_value" value="{{ $product->product_value ?? old('product_value') }}" class="form-control" id="product_value" step="0.01" required>
               
            </div>

            <div class="form-group">
                <label for="expiration_date">Data de Vencimento</label>
                <input type="date" name="expiration_date" value="{{ $product->expiration_date ?? old('expiration_date') }}" class="form-control" id="expiration_date" required>
                
            </div>

            <div class="form-group">
                <label for="stock_quantity">Quantidade em Estoque</label>
                <input type="number" name="stock_quantity" value="{{ $product->stock_quantity ?? old('stock_quantity') }}" class="form-control" id="stock_quantity" required>
                
                
            </div>

            <div class="form-group">
                <label for="perishable">Produto Perecível</label>
                <input type="checkbox" name="perishable" class="form-control" id="perishable" {{ $product->perishable ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Produto</button>
        </form>
            </div>
        </div>

    </div>

    @endsection
