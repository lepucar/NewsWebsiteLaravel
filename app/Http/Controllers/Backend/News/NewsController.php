<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        
        $newsData = News::all();
        return view('backend.pages.news.index', compact('newsData'));
        
    }

    public function create()
    {
        $categoryData = Category::all();

        
        return view('backend.pages.news.addnews', compact('categoryData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required||min:3|max:255',
            'summary' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'meta_description' => 'required|min:3|max:255',
            'slug' =>'required|unique:news|min:3|max:255',
        ]);

        $validatedData['category_id']=$request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/'), $fileName);
            $validatedData['image'] = "/uploads/news/" . $fileName;
        }        
       
        News::create($validatedData);
        return redirect()->route('news')->with('success', 'News created successfully');
    }

    public function delete($id)
    {
        News::where('id', $id)->delete();
        return redirect()->route('news')->with('success', 'News deleted successfully');
    }

    public function edit($id)
    {
        $news = News::where('id', $id)->first();
        $categoryData = Category::all();
        $data['news']= $news;
        $data['categoryData']= $categoryData;
        return view('backend.pages.news.editnews', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required||min:3|max:255',
            'summary' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'meta_description' => 'required|min:3|max:255',
            'slug' =>'required|min:3|max:255',
        ]);

        $validatedData['category_id']=$request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('uploads/news/'), $fileName);
            $validatedData['image'] = "/uploads/news/" . $fileName;
        }        
        unset($validatedData['_token']);
        News::where('id', $id)->update($validatedData);
        return redirect()->route('categories')->with('success', 'News updated successfully');
    }
}
