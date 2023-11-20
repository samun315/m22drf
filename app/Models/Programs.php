<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;

    protected $table = 'programs';

    protected $fillable = [
        'name', 'image', 'details', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
