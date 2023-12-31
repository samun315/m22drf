<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $results = DB::table('blogs as a')
            ->select('a.*', 'b.name as category_name')
            ->leftJoin('categories as b', 'a.category_id', '=', 'b.id')
            ->orderBy('id', 'DESC')->paginate(10);


        return view('admin.blog.index', ['results' => $results]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.blog.form', compact('categories'));
    }

    public function store(BlogRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $blogImage = $request->file('image');

        if ($blogImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/blog/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['_token']);

            Blog::create($input);
            return redirect()->back()->with('success', 'Blog created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Blog::findOrFail($id);
        return view('admin.blog.form', $data);
    }

    public function update(BlogRequest $request, $id)
    {
        $blog                  = Blog::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $blogImage = $request->file('image');

        if ($blogImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/blog/', $imgName);

            if (file_exists('uploads/blog/' . $blog->image) && !empty($blog->image)) {
                unlink('uploads/blog/' . $blog->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $blog->update($input);
            return redirect(route('admin.blog.index'))->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Blog::findOrFail($request->blog_id);
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
