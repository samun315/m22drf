<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = DB::table('member_details as a')
            ->select('a.*', 'b.name as user_name', 'b.email as user_email', 'b.phone_number as user_phone_number',)
            ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
            ->orderBy('a.id', 'DESC')
            ->get();

        return view('member.member.index', compact('members'));
    }

    public function memberBlogList()
    {
        $results = DB::table('blogs as a')
            ->select('a.*', 'b.name as category_name')
            ->leftJoin('categories as b', 'a.category_id', '=', 'b.id')
            ->orderBy('id', 'DESC')
            ->where('blog_type', 'PRIVATE')
            ->paginate(10);

        return view('member.member_blog.index', compact('results'));
    }
}
