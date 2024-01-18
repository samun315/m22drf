<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\Folder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index()
    {
        $results = DB::table('documents as a')
            ->select('a.*', 'b.name as folder_name')
            ->leftJoin('folders as b', 'a.folder_id', '=', 'b.id')
            ->orderBy('id', 'DESC');

        return view('admin.document.file', ['results' => $results]);
    }

}
