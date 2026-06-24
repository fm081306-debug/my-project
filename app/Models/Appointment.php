<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
   protected $fillable = [
    'client_id',
    'service_id',
    'level_app_id',
    'date',
    'time',
    'status',
    'notes',
];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
public function user()
{
    return $this->belongsTo(User::class);
}

public function service()
{
    return $this->belongsTo(Service::class);
}

public function type()
{
    return $this->belongsTo(AppointmentType::class);


    return $this->belongsTo(LevelApp::class, 'level_app_id');

}

}