<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity as Activity;
use App\Product as Product;
use Auth as Auth;
use Carbon\Carbon;

class ActivityController extends Controller
{
    public function __construct(Activity $activity, Product $product)
    {
        $this->activity = $activity;
        $this->product = $product;
    }

    public function index()
    {
        $data = [];
        $data = DB::table('activities')
            ->select('activities.id', 'products.name', 'activities.created_at')
            ->leftJoin('products', 'products.id', '=', 'activities.product_id')
            ->orderByDesc('activities.created_at')
            ->where('user_id', Auth::id())
            ->offset(0)
            ->limit(100)
            ->get();
        return view('activity/index', ['activities' => $data]);
    }

    public function delete($activity_id)
    {
        $activity = $this->activity->find($activity_id);
        $activity->delete();
        $product_id = $activity->product_id;
        // Product add 1
        $product = new Product;
        $product = $product->find($product_id);
        $product->increment('stock');
        return redirect('activity');
    }

    public function today()
    {
        $data = [];
        $data = DB::table('activities')
            ->select(['products.name', DB::raw('count(activities.product_id) AS count'), DB::raw('MAX(activities.created_at) AS created_at')])
            ->leftJoin('products', 'products.id', '=', 'activities.product_id')
            ->groupBy('products.name')
            ->orderBy('products.name')
            ->where('user_id', Auth::id())
            ->whereDate('activities.created_at', Carbon::today())
            ->get();
        return view('activity/today', ['activities' => $data]);
    }

    public function overview()
    {
        $data = [];
        $data = DB::table('activities')
            ->select(['products.id', 'products.name', DB::raw('count(activities.product_id) AS count'), DB::raw('MIN(activities.created_at) AS created_at'), DB::raw('MAX(activities.created_at) AS updated_at')])
            ->leftJoin('products', 'products.id', '=', 'activities.product_id')
            ->groupBy('products.name', 'products.id')
            ->orderBy('products.name')
            ->where('user_id', Auth::id())
            ->get();
        return view('activity/overview', ['activities' => $data]);
    }

    public function list($id)
    {
        $data = [];
        $data = $this->activity->where('user_id', Auth::id())->where('product_id', $id)->orderByDesc('created_at')->offset(0)->limit(100)->get();
        $product = $this->product->find($id);
        return view('activity/singlelist')->with(array('activities' => $data))->with('productname', $product->name);
    }
}
