<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GetInTouch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GetInTouchController extends Controller
{

    public function index()
    {
        $results =  GetInTouch::orderBy('id', 'DESC')->paginate(10);

        return view('admin.get_in_touch.index', compact('results'));
    }

    public function store(Request $request)
    {
        $input                  = $request->all();
        $input['created_at']    = Carbon::now();

        try {

            unset($input['_token']);

            GetInTouch::create($input);
            return redirect()->back()->with('success', 'Get in touch added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
