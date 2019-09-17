<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Image;
use App\Partner;
use App\Post;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use function Composer\Autoload\includeFile;

class SiteController extends Controller
{
    public function home()
    {

        $partners = Partner::orderBy("id","desc")->paginate(15);
        $data = ["partners" => $partners];
        return view("site.index", $data);
    }

    public function getPosts()
    {

        $posts = Post::orderBy("id","desc")->paginate(12);
        $data = ["posts" => $posts];
        return view("site.news", $data);
    }

    public function getPartnerProjects(Partner $partner)
    {
        $data = ["projects" => $partner->projects];
        return view("site.projects", $data);
    }

    public function getProjects()
    {
        $projects = Project::orderBy("id","desc")->paginate(10);
        $data = ["projects" => $projects];
        return view("site.projects", $data);
    }

    public function getImages()
    {
        $images = Image::orderBy("id","desc")->paginate(9);
        $data = ["images" => $images];
        return view("site.album", $data);
    }

    public function storeMessage(Request $request)
    {
        $rules = [
            "full_name" => "required",
            "email" => "required",
            "message" => "required",
        ];
        $data = $this->validate($request, $rules);
        Contact::create($data);
        return Response::redirectTo("/contact");
    }

    public function setUserLang($lang)
    {
        if (in_array($lang, ["en", "ar"])) {
            session()->has("lang") ? session()->forget("lang") : session()->put("lang", $lang);

        } else {
            session()->has("lang") ? session()->forget("lang") : session()->put("lang", $lang);

        }

        return back();

    }

    public function search(Request $request)
    {
        $rules = ["query" => "required"];
        $request = $this->validate($request, $rules);
        $projects = Project::where("title", "like", "%{$request["query"]}%")->orWhere("year", "like", "%{$request["query"]}%")->get();
       if ( !isset($projects[0])) {
         $partner = Partner::where("name", "like", "%{$request["query"]}%")->first();
         $projects=$partner->projects;
         }
        $data = ["projects" => $projects];
        return view("site.projects", $data);

    }

    public function getPostDetails(Post $post)
    {
        $data = ["post" => $post];
        return view("site.post", $data);

    }
}
