<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    use HasFactory;
    protected $table = "super_admin";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'super_admin',
        'super_password',
    ];
}
