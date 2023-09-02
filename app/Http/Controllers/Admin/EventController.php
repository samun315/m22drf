<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $results = Event::orderBy('id', 'DESC')->paginate(10);

        return view('admin.event.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.event.form');
    }

    public function store(EventRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $eventImage = $request->file('banner_img');

        if ($eventImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/event/', $imgName);
            $input['banner_img'] = $imgName;
        }

        try {

            unset($input['_token']);

            Event::create($input);
            return redirect()->back()->with('success', 'Event created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Event::findOrFail($id);
        return view('admin.projects.form', $data);
    }

    public function update(EventRequest $request, $id)
    {
        $event               = Event::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $eventImage = $request->file('banner_img');

        if ($eventImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/event/', $imgName);

            if (file_exists('uploads/event/' . $event->banner_img) && !empty($event->banner_img)) {
                unlink('uploads/event/' . $event->banner_img);
            }

            $input['banner_img'] = $imgName;
        }

        try {
            $event->update($input);
            return redirect(route('admin.event.index'))->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Event::findOrFail($request->event_id);
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
