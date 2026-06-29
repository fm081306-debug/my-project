<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienttController extends Controller
{
    // عرض كل العملاء
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // صفحة إنشاء عميل
    public function create()
    {
        return view('clients.create');
    }

    // حفظ عميل جديد
    public function store(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect('/clients')->with('success', 'تم إضافة العميل');
    }

    // عرض عميل واحد
 public function show($id)
{
    $category = Category::findOrFail($id);

    return view('categories.show', compact('category'));
}

    // صفحة التعديل
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    // تحديث البيانات
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect('/clients')->with('success', 'تم التحديث');
    }

    // حذف العميل
    public function destroy($id)
    {
        Client::destroy($id);

        return redirect('/clients')->with('success', 'تم الحذف');
    }
}