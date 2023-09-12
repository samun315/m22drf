<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerRequest;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class VolunteerController extends Controller
{
    public function index()
    {
        $results = Volunteer::orderBy('id', 'DESC')->paginate(10);

        return view('admin.volunteer.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.volunteer.form');
    }

    public function store(VolunteerRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $volunteerImage = $request->file('profile_img');

        if ($volunteerImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('profile_img')) . '.' . $request->file('profile_img')->getClientOriginalExtension();
            $request->file('profile_img')->move('uploads/volunteer/', $imgName);
            $input['profile_img'] = $imgName;
        }

        try {

            unset($input['_token']);

            Volunteer::create($input);
            return back()->with('success', 'Volunteer created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Volunteer::findOrFail($id);
        return view('admin.volunteer.form', $data);
    }

    public function update(VolunteerRequest $request, $id)
    {
        $volunteer              = Volunteer::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $volunteerImage = $request->file('profile_img');

        if ($volunteerImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('profile_img')) . '.' . $request->file('profile_img')->getClientOriginalExtension();
            $request->file('profile_img')->move('uploads/volunteer/', $imgName);

            if (file_exists('uploads/volunteer/' . $volunteer->profile_img) && !empty($volunteer->profile_img)) {
                unlink('uploads/volunteer/' . $volunteer->profile_img);
            }

            $input['profile_img'] = $imgName;
        }

        try {
            $volunteer->update($input);
            return redirect(route('admin.volunteer.index'))->with('success', 'Volunteer updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Volunteer::findOrFail($request->volunteer_id);
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
