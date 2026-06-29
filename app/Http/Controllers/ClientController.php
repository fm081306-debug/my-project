<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    // عرض العملاء
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // إضافة عميل
    public function store(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect('/clients')->with('success', 'تمت الإضافة بنجاح');
    }
}