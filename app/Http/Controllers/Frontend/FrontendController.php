<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function aboutUs()
    {
        return view('frontend.about.index');
    }

    public function event()
    {
        return view('frontend.event.index');
    }

    public function eventDetails($event_id)
    {
        $event = DB::table('events')->where('id', $event_id)->first();

        return view('frontend.event.details', compact('event'));
    }

    public function contactUs()
    {
        return view('frontend.contact.index');
    }

    public function project()
    {
        return view('frontend.project.index');
    }

    public function projectDetails($project_id)
    {
        $project = DB::table('projects')->where('id', $project_id)->first();

        return view('frontend.project.details', compact('project'));
    }

    public function blog()
    {
        return view('frontend.blog.index');
    }

    public function blogDetails($blog_id)
    {
        $blog = DB::table('blogs')->where('id', $blog_id)->first();

        return view('frontend.blog.details', compact('blog'));
    }
}
