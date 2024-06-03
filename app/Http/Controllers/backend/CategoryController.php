<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index()
    {
        $list = Category::where('status', '!=',0)->orderBy('created_at','desc')->get();
        $htmllparenid="";
        $htmllsortorder="";
        foreach($list as $item){
            $htmllparenid .="<option value= '" .$item->id . "'>".$item->name . "'</option>";
            $htmllsortorder .="<option value= '" .($item->sort_order+1) . "'>Sau ".$item->name . "'</option>";
        }
        return view('backend.category.index', compact('list', 'htmllparenid', 'htmllsortorder'));
    }
    public function create()
    {

        return view('backend.category.create');
    }
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->description = $request->description;
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id()??1;
        $category->status = $request->status;
        $category->save();
        return  redirect()->route('backend.category.index');
    }
    public function show(string $id)
    {
        return view('backend.category.show');
    }
    public function edit(string $id)
    {
        return view('backend.category.edit');
    }
    public function update(Request $request, string $id)
    {
        return view('backend.category.update');
    }
    public function destroy(string $id)
    {
        return view('backend.category.destroy');
    }
    public function restore(string $id)
    {
        return view('backend.category.restore');
    }
    public function delete(string $id)
    {
        return view('backend.category.delete');
    }
    public function trash(string $id)
    {
        return view('backend.category.trash');
    }
}
