<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member_details';

    protected $fillable = [
        'title', 'details', 'date', 'banner_img', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
