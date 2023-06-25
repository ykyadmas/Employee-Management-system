<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
    'first_name',
    'last_name',
    'address',
     'city_id',
     'region_id',
     'country_id',
     'department_id',
     'role_id',
     'zip_code',
     'birth_date',
     'date_hired'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function leavemanagement()
    {
       return $this->hasMany(leavemanagement::class);
    }
    public function overtime()
    {
       return $this->hasMany(overtime::class);
    }
}
