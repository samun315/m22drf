<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'title', 'details', 'date', 'banner_img', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
