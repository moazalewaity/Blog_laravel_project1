<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\Photo;
use App\Category;
use Illuminate\Support\Facades\Session;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();

        return view('admin.post.create' ,compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {

        $input = $request->all(); 
        $user = Auth::user();
         if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images' , $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $user->posts()->create($input);
        return redirect('admin/posts');
       // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categorys = Category::all();
        return view('admin.post.edit' , compact(['post' , 'categorys']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $id)
    {
         $input = $request->all(); 
         if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images' , $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        Auth::user()->posts()->whereId($id)->first()->update($input);
        return redirect('admin/posts');
        
       // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::FindOrFail($id);
        unlink(public_path() . $post->photo->file);
        $post->delete();
        Session::flash('delete_post' , 'The post has been deletd');
        return redirect('admin/posts');
    }


    public function post($id)
    {
        $post = Post::find($id);
        $comments = $post->comments()->whereIsAcive(1)->get();
        $Category = Category::all();
               $categories = Category::all();
       return view('post' , compact(['post' , 'comments' , 'Category' , 'categories']));
    }
}
