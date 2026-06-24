<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'category_id',
    ];

    // علاقة الخدمة مع التصنيف
  public function category()
{
    return $this->belongsTo(Category::class);
}

public function sector()
{
    return $this->belongsTo(Sector::class);
}

public function appointments()
{
    return $this->hasMany(Appointment::class);
}
}