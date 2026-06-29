<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = RequestModel::with(['client', 'service'])->get();
        return view('requests.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        RequestModel::create([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'status' => $request->status ?? 'pending',
        ]);

        return redirect('/requests')->with('success', 'تم إضافة الطلب');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $requestItem = RequestModel::findOrFail($id);
        return view('requests.show', compact('requestItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $requestItem = RequestModel::findOrFail($id);
        return view('requests.edit', compact('requestItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestItem = RequestModel::findOrFail($id);

        $requestItem->update([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'status' => $request->status,
        ]);

        return redirect('/requests')->with('success', 'تم التحديث');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RequestModel::destroy($id);

        return redirect('/requests')->with('success', 'تم الحذف');
    }
}