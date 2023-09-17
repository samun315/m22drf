<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectFollowUpRequest;
use App\Models\ProjectFollowUp;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProjectFollowUpController extends Controller
{
    public function index()
    {
        $results = ProjectFollowUp::orderBy('id', 'DESC')->paginate(10);

        return view('admin.project_follow_up.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.project_follow_up.form');
    }

    public function store(ProjectFollowUpRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $project_follow_up_image = $request->file('image_url');

        if ($project_follow_up_image) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image_url')) . '.' . $request->file('image_url')->getClientOriginalExtension();
            $request->file('image_url')->move('uploads/project_follow_up/', $imgName);
            $input['image_url'] = $imgName;
        }

        try {

            unset($input['_token']);

            ProjectFollowUp::create($input);
            return back()->with('success', 'Project follow-up created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = ProjectFollowUp::findOrFail($id);
        return view('admin.project_follow_up.form', $data);
    }

    public function update(ProjectFollowUpRequest $request, $id)
    {
        $project_follow_up              = ProjectFollowUp::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $project_follow_upImage = $request->file('image_url');

        if ($project_follow_upImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image_url')) . '.' . $request->file('image_url')->getClientOriginalExtension();
            $request->file('image_url')->move('uploads/project_follow_up/', $imgName);

            if (file_exists('uploads/project_follow_up/' . $project_follow_up->image_url) && !empty($project_follow_up->image_url)) {
                unlink('uploads/project_follow_up/' . $project_follow_up->image_url);
            }

            $input['image_url'] = $imgName;
        }

        try {
            $project_follow_up->update($input);
            return redirect(route('admin.project_follow_up.index'))->with('success', 'Project follow-up updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = ProjectFollowUp::findOrFail($request->volunteer_id);
        $input['status'] = $request->status;

        try {
            $data->update($input);
            $bug = 0;
        } catch (\Exception $e) {
            return response()->json(['error', $e->getMessage()]);
        }

        if ($bug == 0) {
            return response()->json('success');
        } else {
            return response()->json('error');
        }
    }
}
