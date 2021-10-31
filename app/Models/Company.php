<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'person',
        'contact_phone_number',
        'company_id',
        'email',
        'employees',
        'description'
    ];
}
