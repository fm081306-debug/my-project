<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class level_app extends Model
{
    public function appointments()
{
    return $this->hasMany(Appointment::class);
}
}
