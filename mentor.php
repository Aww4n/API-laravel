<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    use HasFactory;
    protected $guarded= ['id', 'ncreate_at', 'update_at'];
    protected $fillable= [
        'name',
        'profile',
        'email',
        'profession'
    ];
}
