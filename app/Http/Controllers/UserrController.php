<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // عرض كل المستخدمين
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // صفحة إضافة
    public function create()
    {
        return view('users.create');
    }

    // حفظ مستخدم
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect('/users')->with('success', 'تم إضافة المستخدم');
    }

    // عرض مستخدم
    public function show($id)
    {
        $user = User::with('appointments')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    // تعديل
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // تحديث
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect('/users')->with('success', 'تم التحديث');
    }

    // حذف
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/users')->with('success', 'تم الحذف');
    }
}