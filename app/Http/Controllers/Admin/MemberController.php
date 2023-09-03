<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $results = Member::orderBy('id', 'DESC')->paginate(10);

        return view('admin.member.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.member.form');
    }

    public function store(MemberRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $memberImage = $request->file('banner_img');

        if ($memberImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/member/', $imgName);
            $input['banner_img'] = $imgName;
        }

        try {

            unset($input['_token']);

            Member::create($input);
            return redirect()->back()->with('success', 'Member created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Member::findOrFail($id);
        return view('admin.member.form', $data);
    }

    public function update(MemberRequest $request, $id)
    {
        $member                = Member::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $memberImage = $request->file('banner_img');

        if ($memberImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('banner_img')) . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move('uploads/member/', $imgName);

            if (file_exists('uploads/member/' . $member->banner_img) && !empty($member->banner_img)) {
                unlink('uploads/member/' . $member->banner_img);
            }

            $input['banner_img'] = $imgName;
        }

        try {
            $member->update($input);
            return redirect(route('admin.member.index'))->with('success', 'Member updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Member::findOrFail($request->member_id);
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
