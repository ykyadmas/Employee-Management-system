<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'employee_id',
         'hours'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
