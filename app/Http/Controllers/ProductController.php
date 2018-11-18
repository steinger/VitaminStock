<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ProductController extends Controller
{
    //
    public function __construct( Product $product )
    {
        $this->product = $product;
    }

    public function index()
    {
        $data = [];
        $data['products'] = $this->product->all()->sortBy("name");
        return view('products/index', $data);
    }

    public function export()
    {
        $data = [];

        $data['products'] = $this->product->all()->sortBy("name");
        header('Content-Disposition: attachment;filename=export.xls');
        return view('products/export', $data);
    }

    public function newProduct( Request $request, Product $product )
    {
        $data = [];

        $data['name'] = $request->input('name');
        $data['stock'] = $request->input('stock');
        $data['description'] = $request->input('description');

        if( $request->isMethod('post') )
        {
          // dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:3',
                    'stock' => 'numeric|min:0|max:200',
                    'description' => 'required|min:1',
                ]
            );
            $data['created_at'] = now();
            $product->insert($data);

            return redirect('products');
        }
        $data['modify'] = 0;
        return view('products/form', $data);
    }

    public function show($product_id, Request $request)
    {
        $data = []; $data['product_id'] = $product_id;
        $data['modify'] = 1;
        $product_data = $this->product->find($product_id);
        $data['name'] = $product_data->name;
        $data['stock'] = $product_data->stock;
        $data['description'] = $product_data->description;

        return view('products/form', $data);
    }

    public function modify( Request $request, $product_id, Product $product )
    {
        $data = [];

        $data['name'] = $request->input('name');
        $data['stock'] = $request->input('stock');
        $data['description'] = $request->input('description');

        if( $request->isMethod('post') )
        {
            // dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:3',
                    'stock' => 'numeric|min:0|max:200',
                    'description' => 'required|min:1',
                ]
            );

            $product_data = $this->product->find($product_id);

            $product_data->name = $request->input('name');
            $product_data->stock = $request->input('stock');
            $product_data->description = $request->input('description');

            $product_data->save();

            return redirect('products');
        }

        return view('products/form', $data);
    }

}
