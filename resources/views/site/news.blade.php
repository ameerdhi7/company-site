@extends("layouts.master")
@section("content")
    <style>
        .header_area{
            position: static;
        }
        .header_area .navbar{
       background: #0b0b0b;
        }
        .news-background{
            z-index: 1;
            background-size: cover;
            background: url(/img/new.jpg) no-repeat scroll center center;
            width: 100%;


        }
        .rgba-black-strong{
            padding:120px 120px;

        }
        .title{
            line-height: 26px;
            /*font-size: 16px;*/
            font-family: "Roboto", sans-serif;
            font-weight: bold;

        }
    </style>
    <div class="news-background">
        <div class="container-fluid rgba-black-strong">
            <h2 class="title text-white text-center display-4">CHECK THE LATEST NEWS </h2>
        </div>
    </div>
    <div class="container px-5 mb-5 mt-5">
        <h1 class="text-muted text-center">NEWS</h1>
        @foreach($posts as $post)
            <div class="row mt-2">
            <div class="col-lg-2 col-12">
                <span class="badge badge-pill badge-dark">{{$post->created_at}}</span>
            </div>
            <div class="col-lg-10 col-12">
                <div class="float-right">
                    <a href="">
                        <h3 class="text-muted">{{$post->title}}</h3>
                    </a>
                </div>
            </div>
        </div>
            <hr>
        @endforeach
    </div>
    @endsection
