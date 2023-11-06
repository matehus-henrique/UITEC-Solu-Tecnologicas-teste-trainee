<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        //
            $products = Product::paginate(10);
            return view("app.index",["products"=> $products, "request"=> $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        
        return view("app.create", ["categories"=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // $regras = [
    //     'product_name' => 'required|min:3|max:40',
    //     'category_id' => 'exists:categories,id',
    //     'product_value' => 'required|numeric',
    //     'expiration_date' => 'required|date',
    //     'stock_quantity' => 'required|integer',
    // ];

    // $feedback = [
    //     'required' => 'O campo :attribute deve ser preenchido',
    //     'product_name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
    //     'product_name.max' => 'O campo nome deve ter no máximo 40 caracteres',
    //     'product_value.numeric' => 'O campo deve ser numérico',
    //     'expiration_date.date' => 'Selecione a Data',
    //     'stock_quantity.integer' => 'Selecione a quantidade',
    // ];

    // Verifica se o campo perishable está presente no request
    if ($request->has('perishable')) {
        
        $request['perishable'] = $request->input('perishable') === 'on' ? true : false;
    } else {
       
        $request['perishable'] = false;
    }

    

    Product::create($request->all());
    return redirect("/");
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        
        return view("app.show",["product"=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        return view("app.edit",["product"=> $product, 'categories' => $categories]);
    }

    
    public function update(Request $request, Product $product)
    {
    

        // Defina o valor booleano com base no estado do checkbox
        $product->perishable = $request->has('perishable');
        
        $product->update($request->all());
        return redirect()->route('products.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

    return redirect()->route('products.index');
    }
}
