<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $results = Project::orderBy('id', 'DESC')->paginate(10);

        return view('admin.project.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.project.form');
    }

    public function store(ProjectRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $projectImage = $request->file('banner_img');

        if ($projectImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/project/', $imgName);
            $input['banner_img'] = $imgName;
        }

        try {

            unset($input['_token']);

            Project::create($input);
            return redirect()->back()->with('success', 'Project created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Project::findOrFail($id);
        return view('admin.project.form', $data);
    }

    public function update(ProjectRequest $request, $id)
    {
        $project                = Project::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $projectImage = $request->file('banner_img');

        if ($projectImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/project/', $imgName);

            if (file_exists('uploads/project/' . $project->banner_img) && !empty($project->banner_img)) {
                unlink('uploads/project/' . $project->banner_img);
            }

            $input['banner_img'] = $imgName;
        }

        try {
            $project->update($input);
            return redirect(route('admin.project.index'))->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Project::findOrFail($request->project_id);
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
