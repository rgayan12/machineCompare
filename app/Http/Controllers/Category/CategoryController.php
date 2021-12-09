<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
        //Request Validated
        $request->validate([
            'categoryName' => 'required|max:255|alpha|unique:categories,name'
        ]);

        try {
            Category::create([
                'name' => $request->input('categoryName')
            ]);
        }
        catch (\Exception $e){
            throw new \Exception('Unable to save data');
        }

        return redirect()->route('categories.create')->with('status', 'Category Created');
    }

}
