@extends("layouts.master")
@section("content")
    <style>
        footer{
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
    </style>
        <div class="section mt-2 mb-3">
            <div class="container">
                <!-- <img src="../assets/img/shape-s.png" class="path path3"> -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <h1 class="title text-white">{{trans("content.news_page")}}</h1>
                    </div>
                </div>
<div class="row">
@foreach($posts as $post)
    <div class="col-auto col-md-3">
        <div class="card card-nav-tabs">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p class="text-white">{{$post->title}}</p>
                    <p class="blockquote-footer text-white">{{substr($post->desc, 0, 10)}}
                        <a href="/news/{{$post->id}}/">read more</a></p>
                </blockquote>
            </div>
        </div>
    </div>
    @endforeach
</div>
                <span class="mt-2">{{$posts->links()}}</span>
</div>
 </div>
    @endsection
