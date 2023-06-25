<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable= ['country_code', 'name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function regions(){
        return $this->hasMany(Region::class);
    }
}
