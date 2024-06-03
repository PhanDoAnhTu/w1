<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listTopic = Topic::orderBy("created_at", "DESC")->get();
        $htmlTopicId = "";
        foreach ($listTopic as $item) {
            $htmlTopicId .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        $listPost = Post::orderBy("created_at", "DESC")->rightJoin('topic', 'post.topic_id', '=', 'topic.id')->select('post.*','topic.name as topic_name')->get();

        return view("backend.post.index", compact('listPost', 'htmlTopicId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->topic_id = $request->topic_id;
        $post->title = $request->title;
        $post->slug = Str::of($request->title)->slug('-');
        $post->type = $request->type;
        $post->detail = $request->detail;
        // $post->image = $request->image;
        $post->description = $request->description;
        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by = Auth::id() ?? 1;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
