<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DonationRequest;
use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class DonationRequestController extends Controller
{
    public function index()
    {
        $results = Donation::orderBy('id', 'DESC')->paginate(10);

        return view('admin.donation_request.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.donation_request.form');
    }

    public function store(DonationRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);

            Donation::create($input);
            return back()->with('success', 'Donation request created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Donation::findOrFail($id);

        return view('admin.donation_request.form', $data);
    }

    public function update(DonationRequest $request, $id)
    {
        $donation               = Donation::findOrFail($id);

        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        try {
            $donation->update($input);
            return redirect(route('admin.donation_request.index'))->with('success', 'Donation request updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Donation::findOrFail($request->donation_request_id);
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

    public function delete($id)
    {
        try {
            Donation::where('id', $id)->delete();
            return response()->json(['success' => true, 'status' => 200, 'message' => 'Deleted successfully']);
        } catch (Exception $exception) {
            return response()->json(['success' => false, 'status' => 400, 'message' => $exception->getMessage()]);
        }
    }
}
