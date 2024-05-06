<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\Api\PostRequest;

class PostController extends Controller
{
    // Show all posts.
    public function index(){
        $posts = Post::get();

        return response()->json([
            'status'=>200 ,
            'posts'=>$posts ,
            'message'=>'Get post successfully'
        ]);
    }

    // Create a new post using data from the request.
    public function store(PostRequest $request){
        $post = Post::create([
            'title'=> $request->title,
            'body'=> $request->body,
            'user_id'=> $request->user_id,
        ]);

        return response()->json([
            'status'=>201 ,
            'post'=>$post ,
            'message'=>'Post created successfully'
        ]);
    }

    // Show a specific post by ID.
    public function show($id){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json([
            'status'=>200 ,
            'post'=>$post ,
            'message'=>'Get post successfully'
        ]);
    }

    // Update a specific post by ID using data from the request.
    public function update(PostRequest $request , $id){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->update([
            'title'=> $request->title,
            'body'=> $request->body,
            'user_id'=> $request->user_id,
        ]);

        return response()->json([
            'status'=>201 ,
            'post'=>$post ,
            'message'=>'Post updated successfully'
        ]);
    }

    // Delete a specific post by ID.
    public function delete($id){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();

        return response()->json([
            'status'=>204 ,
            'post'=>$post ,
            'message'=>'Post deleted successfully'
        ]);
    }
}
