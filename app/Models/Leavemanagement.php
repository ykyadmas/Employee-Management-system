<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leavemanagement extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'leavetype_id',
        'name',
        'leave_date',
        ];

        public function leavetype()
        {
            return $this->belongsTo(Leavetype::class);
        }
        public function employee()
        {
            return $this->belongsTo(Employee::class);
        }


}
