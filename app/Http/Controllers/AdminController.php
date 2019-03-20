<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Comment;

class AdminController extends Controller
{
    public function index()
    {

    	$post = Post::count();
    	$user = User::count();
    	$category = Category::count();
    	$comment = Comment::count();
    	return view('admin.index' , compact('user' , 'post' , 'category' , 'comment'));

    }
}
