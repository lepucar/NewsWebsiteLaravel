<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categoryData = Category::all();
        return view('backend.pages.category.index', compact('categoryData'));
        
    }

    public function create()
    {
        
        
        return view('backend.pages.category.addcategory');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories',
            'slug' =>'required|unique:categories',
            

        ]);
       
        
        
        
        Category::create($validatedData);
        
        return redirect()->route('categories')->with('success', 'Category created successfully');
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.pages.category.editcategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'category_name' => 'required',
            'slug' =>'required',
        ]);
        
        
        
        unset($validatedData['_token']);
        Category::where('id', $id)->update($validatedData);
        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }
}
