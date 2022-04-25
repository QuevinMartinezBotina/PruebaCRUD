<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    static $rules = [
        'name_user' => 'required',
        'email' => 'required',
    ];

    protected $perPage = 20;

    use HasFactory;

    protected $fillable = ['name_user', 'email'];
}
