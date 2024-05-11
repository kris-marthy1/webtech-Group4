<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishments extends Model
{
    use HasFactory;
    protected $table = "registered_establishments";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'est_name',
        'est_username',
        'est_password',
        'est_image',
    ];
}
