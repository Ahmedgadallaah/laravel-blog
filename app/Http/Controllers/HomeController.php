<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$post_count = Post::all()->count();
    	$trashed_count = Post::onlyTrashed()->get()->count();
        $users_count = User::all()->count();
        $categories_count = Category::all()->count();

        return view('admin.dashboard', compact('post_count' ,'trashed_count','users_count','categories_count'));

    }
}
