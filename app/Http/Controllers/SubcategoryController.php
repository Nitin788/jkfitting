<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin panle.backend.sub_category_list', compact('subcategories'));
    }
    public function subcategory()
    {
        $categories = category::all();
        $subcategories = subcategory::paginate('10');
        return view('admin panle.backend.sub-category', compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.sub-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $subcategory = subcategory::where('title', $request->title)->first();
        $contact = new Subcategory;
        if ($subcategory == NULL) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('image'), $imageName);
            $contact->category_id = $request->category;
            $contact->title = $request->title;
            $contact->slug = str::slug($request->category);
            $contact->photo = $imageName;
            $contact->status = $request->status;
            $contact->save();
            session()->flash('success', 'new sub category added successfully');
            return redirect()->back();
        }
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
        $subcategories = subcategory::findOrfail($id);
        $categories = category::all();
        return view('admin panle.backend.edit-subcategory', compact('subcategories', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $subcategories = subcategory::find($request->id);
        $subcategories->title = $request->title;
        $subcategories->slug = str::slug($request->category);
        $subcategories->save();

        return redirect()->route('subcategories.subcategories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subcategory $subcategory, $id)
    {

        $subcategory=subcategory::where('id', $id)->delete();

        return redirect()->route('subcategories.subcategories');

    }
}
