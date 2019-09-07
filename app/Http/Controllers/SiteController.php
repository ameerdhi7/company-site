<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function getPosts(){

     $posts= Post::all();
     $data=["posts"=>$posts];
     return view("site.news",$data);
  }
}
