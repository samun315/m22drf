<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member_details';

    protected $fillable = [
        'user_id', 'present_job', 'date_of_bith', 'spouse_name', 'personal_charity', 'philosopy_life', 'present_address',
        'permanent_address', 'village_address', 'children_details', 'extra_curicular_activities', 'lifetime_achievement', 'special_occasions',
        'passport_photo', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
