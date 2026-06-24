<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   use App\Models\Client;
use Illuminate\Http\Request;

public function store(Request $request)
{
    Client::create([
        'name' => $request->name,
        'phone' => $request->phone,
    ]);

    return "تم إضافة عميل";
}
}
