<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','first_lastname','second_lastname',
        'birthday', 'email', 'gender','image',
        'phone', 'cell_phone',
        'date_of_admission', 'dni',
        'date_of_egress',
        'department_id',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Branch::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
