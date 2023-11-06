@extends('layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')

<div class="">
    <div class="cabecalho">
        <p>- Adicionar - Produto</p>
    </div>

    <div class="menu">
        <ul>
           
            <li><a href="{{ route('products.index')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        
        <div class="formulario-container">
            <form method="post" action="{{ route('products.store') }}">
                @csrf

                <div class="form-group">
                    <label for="product_name">Nome do Produto</label>
                    <input type="text" name="product_name" value="{{ old('product_name') }}" class="input-field" id="product_name" required>
                   
                </div>

                <div class="form-group">
                    <label for="category_id">Categoria</label>
                    <select name="category_id" class="select-field" id="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selectes' : ''}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="product_value">Valor do Produto</label>
                    <input type="number" name="product_value" value="{{ old('product_value') }}" class="input-field" id="product_value" step="0.01" required>
                    
                </div>

                <div class="form-group">
                    <label for="expiration_date">Data de Vencimento</label>
                    <input type="date" name="expiration_date" value="{{ old('expiration_date') }}" class="input-field" id="expiration_date" required>
                   
                </div>

                <div class="form-group">
                    <label for="stock_quantity">Quantidade em Estoque</label>
                    <input type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" class="input-field" id="stock_quantity" required>
                    
                </div>

                <div class="form-group">
                    <label for="perishable">Produto Perecível</label>
                    <input type="checkbox" name="perishable" class="checkbox-field" id="perishable">
                </div>

                <button type="submit" class="submit-button">Salvar Produto</button>
            </form>
        </div>
    </div>
</div>


    @endsection
