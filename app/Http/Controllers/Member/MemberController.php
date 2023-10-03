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

    public function viewMemberData($id)
    {
        $member = DB::table('member_details as a')
            ->select('a.*', 'b.name as user_name', 'b.email as user_email', 'b.phone_number as user_phone_number',)
            ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
            ->where('a.user_id', $id)
            ->first();

        return view('member.member.view', compact('member'));
    }

    public function memberBlogList()
    {
        $results = DB::table('blogs as a')
            ->select('a.*', 'a.id as blog_id', 'b.name as category_name')
            ->leftJoin('categories as b', 'a.category_id', '=', 'b.id')
            ->orderBy('id', 'DESC')
            ->where('a.blog_type', 'PRIVATE')
            ->paginate(10);

        return view('member.member_blog.index', compact('results'));
    }

    public function viewMemberBlog($blog_id)
    {
        $data['result'] = DB::table('blogs as a')
            ->select('a.*', 'a.id as blog_id', 'b.name as user_name')
            ->leftJoin('users as b', 'a.created_by', '=', 'b.id')
            ->where('a.id', $blog_id)
            ->first();

        $data['recent_posts'] = DB::table('blogs')->orderBy('id', 'DESC')->where('blog_type', 'PRIVATE')->take(5)->get();

        return view('member.member_blog.view', $data);
    }
}
