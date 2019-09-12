<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Image;
use App\Partner;
use App\Post;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SiteController extends Controller
{
    public function home(){

       $partners= Partner::all();
       $data=["partners"=>$partners];
       return view("site.index",$data);
    }
  public function getPosts(){

     $posts= Post::all();
     $data=["posts"=>$posts];
     return view("site.news",$data);
  }
  public function getPartnerProjects(Partner $partner){
      $data=["projects"=>$partner->projects];
        return view("site.projects",$data);
  }
  public function getProjects(){
        $projects=Project::paginate(10);
        $data=["projects"=>$projects];
        return view("site.projects",$data);
  }
  public function getImages(){
        $images=Image::paginate(9);
        $data=["images"=>$images];
        return view("site.album",$data);
  }
  public function storeMessage(Request $request){
        $rules=[
         "full_name"=>"required",
         "email"=>"required",
         "message"=>"required",
        ];
        $data=$this->validate($request,$rules);
        Contact::create($data);
        return Response::redirectTo("/contact");
  }
}
