<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view("home", compact("products"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show($id)
    {
        $products = Product::where('id',$id)->get();
//dd($products);
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("products","intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        //dd($request->all());
        $plan = Product::find($request->plan);
        dd($plan);
        $subscription = $request->user()->newSubscription($request->name, $plan->stripe_id)->create($request->token);


        return view("subscription_success");
    }
}
