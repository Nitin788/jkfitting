<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\category;
use App\Models\subcategory;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        $blog = blog::all();
        return view('frontend.index.home', compact('categories', 'subcategories', 'blog'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.index.contactt');
    }
    public function about()
    {
        return view('frontend.index.about');
    }
    public function subcat()
    {
        $subcategories = subcategory::all();
        return view('frontend.index.sub-home',compact('subcategories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
