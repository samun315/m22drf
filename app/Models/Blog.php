<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title', 'category_id', 'description', 'image', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
