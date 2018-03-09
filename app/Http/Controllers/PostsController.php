<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('auth')->except('index','show');

    }
    public function index()
    {
         $posts = Post::latest()->get();

        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = new Post();
        // $post->title= $request->title;
        // $post->body = $request->body;
        // $post->save();
    // $posts = Post::all();
//$post =new Post();

// Post::create($request->all());
        $this->validate(request(),[
               'title'=>'required',
               'body'=>'required'            


        ]);
//Post::create(request(['title','body','user_id']));;

        // we could do it like this 
        auth()->user()->publish(new Post(request(['title','body'])));
        // Post::create([
        //     'title'=>request('title'),
        //     'body'=>request('body'),
        //     'user_id'=>auth()->id()


        //     ]);
                // auth()->id() or auth()->user()->id
// $post->create([
//     'title' =>request('title'),
//     'body'  =>request('body')

//     ]); // mass assignment error because laravel is protecting you 
// so it won't allow cause the user can submit any form data whatever they want 
        // return view('posts.index',compact('posts'));







        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // i name it $id because this is the same name of the wildcard 
    public function show(Post $post)
    {

        // $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         
     $this->validate(request(),[
       'title'=>'required',
       'body'=>'required'            


       ]);
     $post->title = $requst->title;
     $post->body = $request->body;
     return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
