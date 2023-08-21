<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\category;
use App\Models\subcategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = blog::paginate('10');
        return view('admin panle.backend.blog-list', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.blog');
    }
    public function blog()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        return view('admin panle.backend.blog', compact('categories', 'subcategories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'disc' => 'required'
        ]);

        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $contact = new blog;
        $contact->category_id = $request->category;
        $contact->subcategory_id = $request->subcategory;
        $contact->title = $request->title;
        $contact->discription = $request->disc;
        $contact->status = $request->status;
        $contact->photo = $imageName;
        $contact->save();
        session()->flash('success', 'new blog added successfully');
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $blog = blog::findOrfail($id);
        $categories = category::all();
        $subcategories = subcategory::all();

        return view('admin panle.backend.edit-blog', compact('blog','categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $blog = blog::find($request->id);
        $blog->title = $request->title;
        $blog->discription = $request->disc;
        $blog->status = $request->status;
        $blog->photo = $request->photo;
        $blog->save();

        return redirect()->route('blog_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $item, $id)
    {

        $item=blog::where('id', $id)->delete();

        return redirect()->route('blog_list');        
    }
}
