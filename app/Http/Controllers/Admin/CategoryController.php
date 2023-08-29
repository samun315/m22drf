<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $results = Category::orderBy('id', 'DESC')->paginate(10);

        return view('admin.category.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function store(CategoryRequest $request)
    {

        $input                  = $request->all();
        $input['created_by']    = session('logged_session_data.id');
        $input['created_at']    = Carbon::now();

        $categoryImage = $request->file('image');

        if ($categoryImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/category/', $imgName);
            $input['image'] = $imgName;
        }

        try {

            unset($input['_token']);

            Category::create($input);
            return redirect()->back()->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['editModeData'] = Category::findOrFail($id);
        return view('admin.category.form', $data);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category                   = Category::findOrFail($id);
        $input                  = $request->all();
        $input['updated_by']    = session('logged_session_data.id');
        $input['updated_at']    = Carbon::now();

        $categoryImage = $request->file('image');

        if ($categoryImage) {
            $imgName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/category/', $imgName);

            if (file_exists('uploads/category/' . $category->image) && !empty($category->image)) {
                unlink('uploads/category/' . $category->image);
            }

            $input['image'] = $imgName;
        }

        try {
            $category->update($input);
            return redirect(route('admin.category.index'))->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $data = Category::findOrFail($request->category_id);
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
