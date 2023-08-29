<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Eauction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $data['category'] = DB::table('categories')->where('status', 'YES')->count();
        $data['users'] = DB::table('users')->where('status', 'YES')->count();

        return view('dashboard', $data);
    }
}
