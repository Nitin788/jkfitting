<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::paginate('10');
        return view('admin panle.backend.category_list', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin panle.backend.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'status' => 'required',
        ]);

        $category = category::where('name', $request->category)->first();
        
        if ($category == NULL) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('image'), $imageName);
            $contact = new category;
            $contact->name = $request->category;
            $contact->slug = str::slug($request->category);
            $contact->photo = $imageName;
            $contact->status = $request->status;
            $contact->save();
            session()->flash('success', 'new subcategory added successfully');
            return redirect()->back();
        }
        session()->flash('error', 'category already exist');
        return redirect()->back();
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
        $id = decrypt($id);
        $categories = category::findOrfail($id);
        return view('admin panle.backend.edit-category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $categories = category::find($request->id);
        $categories->name = $request->category;
        $categories->name = $request->status;
        $categories->slug = str::slug($request->category);
        $categories->save();
        return redirect()->route('categories.category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category, $id)
    {
        $category = category::where('id', $id)->delete();
        return redirect()->route('categories.category');
    }
}
