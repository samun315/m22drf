<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactUsSetting;
use App\Models\Donation;
use App\Models\Event;
use App\Models\FooterSetting;
use App\Models\MissionVissionSetting;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ProjectFollowUp;
use App\Models\Quote;
use App\Models\Slider;
use Carbon\Carbon;
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
        $data['quotes'] = Quote::orderBy('id', 'DESC')->where('status', 'YES')->get();

        $data['member_details'] = DB::table('member_details as a')
            ->select('a.*', 'b.name as user_name', 'b.email as user_email', 'b.phone_number as user_phone_number',)
            ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
            ->where('a.status', 'YES')
            ->orderBy('a.id', 'DESC')
            ->get();

        $data['featured_project'] = Project::where('featured', 'YES')->first();

        $data['mission_vision'] = MissionVissionSetting::first();
        $data['footer_setting'] = FooterSetting::first();

        return view('frontend.home', $data);
    }

    public function aboutUs()
    {
        $data['volunteers'] = DB::table('volunteers')->get();

        return view('frontend.about.index', $data);
    }

    public function events(Request $request)
    {
        $event_category_query = $request->query('category');

        $results = DB::table('events');

        if (!empty($event_category_query)) {
            $results = $results->where('category_id', $event_category_query);
        }

        $data['results'] = $results->orderBy('id', 'DESC')->paginate(10);

        $data['upcoming_events'] = DB::table('events')->where('event_status', 'Upcoming')->orderBy('id', 'DESC')->get();

        return view('frontend.event.index', $data);
    }

    public function eventDetails(Request $request)
    {
        $event_id = null;

        $upcoming_event_query = $request->query('upcoming-event');
        $event_query = $request->query('event');

        if (!empty($upcoming_event_query)) {
            $event_id =  $upcoming_event_query;
        } else if (!empty($event_query)) {
            $event_id =  $event_query;
        }

        $data['event'] =  DB::table('events as a')
            ->select('a.*', 'b.name as category_name')
            ->leftJoin('categories as b', 'a.category_id', '=', 'b.id')
            ->where('a.id', $event_id)
            ->first();

        $data['upcoming_events'] = DB::table('events')->where('event_status', 'Upcoming')->orderBy('id', 'DESC')->get();

        return view('frontend.event.details', $data);
    }

    public function contactUs()
    {
        $contact_us_setting = ContactUsSetting::first();

        return view('frontend.contact.index', compact('contact_us_setting'));
    }

    public function project(Request $request)
    {
        $project_category_query = $request->query('category');

        $results = DB::table('projects');

        if (!empty($project_category_query)) {
            $results = $results->where('category_id', $project_category_query);
        }

        $results = $results->orderBy('id', 'DESC')->paginate(10);

        return view('frontend.project.index', compact('results'));
    }

    public function projectDetails(Request $request)
    {
        $project_id = null;

        $upcoming_project_query = $request->query('upcoming-project');
        $project_query = $request->query('project');

        if (!empty($upcoming_project_query)) {
            $project_id =  $upcoming_project_query;
        } else if (!empty($project_query)) {
            $project_id =  $project_query;
        }

        $data['project'] =  DB::table('projects as a')
            ->select('a.*', 'b.name as category_name')
            ->leftJoin('categories as b', 'a.category_id', '=', 'b.id')
            ->where('a.id', $project_id)
            ->first();

        $data['projects'] = DB::table('projects')->where('project_status', 'Upcoming')->orderBy('id', 'DESC')->get();

        return view('frontend.project.details', $data);
    }

    public function projectDonationRequestStore(Request $request)
    {
        $input                  = $request->all();
        $input['project_id']    = $request->project_name;
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);
            unset($input['project_name']);

            Donation::create($input);
            return redirect()->back()->with('success', 'Donation information added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
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

    public function chairmanMessage()
    {

        return view('frontend.about.chairmanMessage');
    }

    public function executiveCommittee()
    {

        return view('frontend.about.executiveCommittee');
    }

    public function ourMembers()
    {

        return view('frontend.about.ourMembers');
    }

    public function privacyPolicy()
    {

        return view('frontend.about.privacyPolicy');
    }

    public function resolution()
    {

        return view('frontend.about.resolution');
    }

    public function faq()
    {

        return view('frontend.about.faq');
    }
}
