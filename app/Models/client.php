<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Appointment;

class Client extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
    ];
public function city()

{

    return $this->belongsTo(City::class);

}
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    
}
