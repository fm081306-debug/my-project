<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // عرض كل التصنيفات
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // صفحة إضافة
    public function create()
    {
        return view('categories.create');
    }

    // حفظ البيانات
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/categories')->with('success', 'تمت الإضافة');
    }

    // عرض عنصر واحد
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // صفحة تعديل
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // تحديث
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/categories')->with('success', 'تم التحديث');
    }

    // حذف
    public function destroy($id)
    {
        Category::destroy($id);

        return redirect('/categories')->with('success', 'تم الحذف');
    }
}