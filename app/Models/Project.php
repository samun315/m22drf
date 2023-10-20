<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'category_id', 'title', 'details', 'deadline', 'budget', 'achieved', 'banner_img', 'status', 'delete', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
