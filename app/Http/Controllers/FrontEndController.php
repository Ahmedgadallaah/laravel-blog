<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index (){
        $title =  Setting::first()->site_name;
        $categories =  Category::take(5)->get();
        $first_post =   Post::orderBy('created_at', 'desc')->first();
        $second_post =  Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();
        $third_post =  Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first();
        $fourth_category =  Category::find(4);
        $third_category =   Category::find(3);
        $second_category =  Category::find(2);
        $first_category =   Category::find(1);
        $settings =  Setting::first();

        return view ('index',compact('title' ,'categories','first_post','second_post','third_post','fourth_category','third_category','second_category','first_category','settings'));
              
    }

    public function singlePost($slug){
 
        $post = Post::where('slug',$slug)->first();
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        $next_id =  Post::where('id','>',$post->id)->min('id');
        $next=      Post::find($next_id);
        $prev_id =  Post::where('id','<',$post->id)->max('id');
        $prev=      Post::find($prev_id);
        $tags=      Tag::all();
        return view('single' ,compact('post' ,'categories','settings','next','prev','tags'));
    }

     public function category($id){
 
        $post = Post::all();
        $category = Category::find($id);
        $name = Category::first()->name;
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        $tags=      Tag::all();
        return view('category' ,compact('post','category' ,'name','categories','settings','tags'));
    }

    public function tag($id){
 
        $post = Post::all();
        $tag = Tag::find($id);
        $name = Category::first()->name;
        $categories = Category::take(5)->get();
        $settings = Setting::first();
        
        return view('tag' ,compact('post','tag' ,'categories','settings'));
    }
}
