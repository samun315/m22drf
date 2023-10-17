<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\FooterSetting;
use App\Models\MissionVissionSetting;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ProjectFollowUp;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['projects'] = Project::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['project_follow_ups'] = ProjectFollowUp::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['events'] = Event::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['blogs'] = Blog::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['partners'] = Partner::orderBy('id', 'DESC')->where('status', 'YES')->get();

        $data['mission_vision'] = MissionVissionSetting::first();
        $data['footer_setting'] = FooterSetting::first();

        return view('frontend.home', $data);
    }

    public function aboutUs()
    {
        $data['volunteers'] = DB::table('volunteers')->get();

        return view('frontend.about.index', $data);
    }

    public function events()
    {
        $results = DB::table('events')->orderBy('id', 'DESC')->paginate(10);

        return view('frontend.event.index', compact('results'));
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
        $results = DB::table('projects')->orderBy('id', 'DESC')->paginate(10);

        return view('frontend.project.index', compact('results'));
    }

    public function projectDetails($project_id)
    {
        $project = DB::table('projects')->where('id', $project_id)->first();

        return view('frontend.project.details', compact('project'));
    }

    public function projectFollowUpDetails($project_follow_up_id)
    {
        $project_follow_up = DB::table('project_followup')->where('id', $project_follow_up_id)->first();

        return view('frontend.project_follow_up.details', compact('project_follow_up'));
    }

    public function blog()
    {
        $results = DB::table('blogs')->orderBy('id', 'DESC')->paginate(10);

        return view('frontend.blog.index', compact('results'));
    }

    public function blogDetails($blog_id)
    {
        // $data['blog'] = DB::table('blogs')->where('id', $blog_id)->first();

        $data['blog_details'] = DB::table('blogs as a')
            ->select('a.*', 'b.title as category_name')
            ->leftJoin('blog_categories as b', 'a.category_id', '=', 'b.id')
            ->where('a.id', $blog_id)
            ->first();

        $data['blog_categories'] = DB::table('blog_categories')->orderBy('id', 'DESC')->take(5)->get();
        $data['latest_blogs'] = DB::table('blogs')->orderBy('id', 'DESC')->take(3)->get();

        return view('frontend.blog.details', $data);
    }
}
