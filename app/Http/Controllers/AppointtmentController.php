<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Service;
use App\Models\LevelApp;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // عرض كل الحجوزات
    public function index()
    {
        $appointments = Appointment::with(['client', 'service', 'levelApp'])->get();
        return view('appointments.index', compact('appointments'));
    }

    // صفحة إضافة حجز
    public function create()
    {
        $clients = Client::all();
        $services = Service::all();
        $types = LevelApp::all();

        return view('appointments.create', compact('clients', 'services', 'types'));
    }

    // حفظ الحجز
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'level_app_id' => 'required|exists:level_apps,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Appointment::create([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'level_app_id' => $request->level_app_id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => 'pending',
        ]);

        return redirect('/appointments')->with('success', 'تم الحجز بنجاح');
    }

    // عرض حجز واحد
    public function show($id)
    {
        $appointment = Appointment::with(['client', 'service', 'levelApp'])->findOrFail($id);
        return view('appointments.show', compact('appointment'));
    }

    // تعديل
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $clients = Client::all();
        $services = Service::all();
        $types = LevelApp::all();

        return view('appointments.edit', compact('appointment', 'clients', 'services', 'types'));
    }

    // تحديث
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'level_app_id' => 'required|exists:level_apps,id',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'required',
        ]);

        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'level_app_id' => $request->level_app_id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $request->status,
        ]);

        return redirect('/appointments')->with('success', 'تم التحديث بنجاح');
    }

    // حذف
    public function destroy($id)
    {
        Appointment::destroy($id);

        return redirect('/appointments')->with('success', 'تم الحذف بنجاح');
    }
}