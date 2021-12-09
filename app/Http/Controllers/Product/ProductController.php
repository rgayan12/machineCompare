<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Category::exists()) {
            $categories = Category::all()->pluck('name', 'id')->prepend('Please Select', '');#
            return view('products.create', compact('categories'));
        } else {
            return redirect()->route('categories.create')->with('status', 'You need to create a category first');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the Request
        $request->validate([
            'productName' => 'required|max:255',
            'category' => 'required|exists:categories,id',
            'productQuantity' => 'required|numeric'
        ]);

        //Save to Database
        try {
            Product::create([
                'name' => $request->input('productName'),
                'category_id' => $request->input('category'),
                'quantity' => $request->input('productQuantity')
            ]);

        } catch (\Exception $e) {
            throw new \Exception('Unable to save data');
        }

        //Return Success
        return redirect()->route('products.create')->with('status', 'Product Created');
    }


}
