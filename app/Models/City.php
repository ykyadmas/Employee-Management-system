<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable =['region_id', 'name'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
