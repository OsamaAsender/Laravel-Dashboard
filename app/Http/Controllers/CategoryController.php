<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // عرض جميع التصنيفات
    public function index()
    {
        // جلب كل التصنيفات من قاعدة البيانات
        $categories = Category::all();

        // عرض صفحة التصنيفات وتمرير المتغير
        return view('categories.index', compact('categories'));
    }

    // عرض صفحة إضافة تصنيف جديد
    public function create()
    {
        return view('categories.create');
    }

    // حفظ التصنيف الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        // تحقق من صحة المدخلات
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // إنشاء التصنيف وتخزينه في قاعدة البيانات
        Category::create($request->all());

        // إعادة توجيه إلى صفحة التصنيفات مع رسالة نجاح
        return redirect()->route('categories.index')->with('success', 'تم إضافة التصنيف بنجاح');
    }

    // عرض صفحة تعديل التصنيف
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // تحديث التصنيف في قاعدة البيانات
    public function update(Request $request, $id)
    {
        // تحقق من صحة المدخلات
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // جلب التصنيف وتحديثه
        $category = Category::findOrFail($id);
        $category->update($request->all());

        // إعادة توجيه مع رسالة نجاح
        return redirect()->route('categories.index')->with('success', 'تم تعديل التصنيف بنجاح');
    }

    // حذف التصنيف من قاعدة البيانات
    public function destroy($id)
    {
        // جلب التصنيف وحذفه
        $category = Category::findOrFail($id);
        $category->delete();

        // إعادة توجيه مع رسالة نجاح
        return redirect()->route('categories.index')->with('success', 'تم حذف التصنيف بنجاح');
    }
}
