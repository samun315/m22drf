<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Programs;
use App\Models\Project;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data['programs'] = Programs::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['projects'] = Project::orderBy('id', 'DESC')->where('status', 'YES')->get();
        $data['events'] = Event::orderBy('id', 'DESC')->where('status', 'YES')->get();

        return view('admin.gallery.index', $data);
    }
}
