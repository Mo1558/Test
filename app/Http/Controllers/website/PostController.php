<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\Api\PostRequest;
use Illuminate\Support\Facades\Auth;
use DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id=Auth::user()->id;
        if($request->ajax())
        {
                $model=Post::with('user')->where('hide',false)->where('user_id',$user_id);

                return DataTables::eloquent($model)
                                ->addColumn('action',function($post){
                                    return view('website.posts.datatable.action',compact('post'));
                                })
                                ->addColumn('hide',function($post){
                                    return view('website.posts.datatable.hide',compact('post'));
                                })
                                ->toJson();
        }
        return view('website.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */    
    public function store(PostRequest $request){
        $user_id=Auth::user()->id;
        $post = Post::create([
            'title'=> $request->title,
            'body'=> $request->body,
            'user_id'=> $user_id,
        ]);

        if($request->has('hide')){
            $post->update(['hide'=>1]);
        }else{
            $post->update(['hide'=>0]);
        }

        session()->flash('success', __('Post created successfully'));
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('website.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('website.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $user_id=Auth::user()->id;
        $post = Post::findOrFail($id);
        $post->update([
            'title'=> $request->title,
            'body'=> $request->body,
            'user_id'=> $user_id,
        ]);

        if($request->has('hide')){
            $post->update(['hide'=>1]);
        }else{
            $post->update(['hide'=>0]);
        }

        session()->flash('success', __('Post updated successfully'));
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        session()->flash('success', __('Post deleted successfully'));
        return redirect()->route('posts.index');
    }

    public function update_post(Request $request){
        $post = Post::findOrFail($request->id);
        $post->update([
            'hide'=>true,
        ]);
        return response()->json(['message'=>__('Post updated sucessfully')],200);
    }
}
