<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ContentsController extends Controller
{
    //
    public function __construct( Product $product )
    {
        $this->product = $product;
    }

    public function home()
    {
        $data = [];
        $data['products'] = $this->product->all();
        return view('contents/home', $data);
    }

    public function debit($product_id)
    {
        $data = $this->product->find($product_id);
        $data->decrement('stock');
        // dd($data);
        $data->save();
        return redirect('/');
    }

    public function dashboard()
    {
      return redirect('/');
    }
}
