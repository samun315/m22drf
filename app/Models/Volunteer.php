<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteers';

    protected $fillable = [
        'name', 'designation', 'profile_img', 'facebook_link', 'instagram_link', 'twitter_link', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
