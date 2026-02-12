<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $pages = ['landing_1', 'landing_2', 'landing_3'];
        return view('admin.category.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:Active,Inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads//category_image'), $filename);
            $imagePath = 'uploads/category_image/' . $filename;
        }

        Category::create([
            'name' => $request->name,
            'image' => $imagePath,
            // 'page_name' => $request->page_name,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '_'),
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $pages = ['landing_1', 'landing_2', 'landing_3'];
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category','pages'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:Active,Inactive',
        ]);

        $imagePath = $category->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
        }

        $category->update([
            'name' => $request->name,
            'image' => $imagePath,
            // 'page_name' => $request->page_name,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '_'),
        ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && file_exists(public_path('public/' . $category->image))) {
            unlink(public_path('public/' . $category->image));
        }

        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
