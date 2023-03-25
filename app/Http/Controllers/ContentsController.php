<?php

namespace App\Http\Controllers;

use App\Models\Activity as Activity;
use App\Models\Product as Product;
use Auth as Auth;

class ContentsController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function home()
    {
        $data = [];
        $data['products'] = $this->product->all()->where('stock', '>', 0)->sortBy("name");
        return view('contents/home', $data);
    }

    public function debit($product_id)
    {
        $data = $this->product->find($product_id);
        $data->decrement('stock');
        $data->save();
        $activity = new Activity;
        $activity->user_id = Auth::id();
        $activity->product_id = $product_id;
        $activity->save();
        return redirect('/');
    }

    public function dashboard()
    {
        return redirect('/');
    }
}
