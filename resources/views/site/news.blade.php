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
            <div class="container-fluid">
                <!-- <img src="../assets/img/shape-s.png" class="path path3"> -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <h1 class="title text-white">LATEST NEWS</h1>
                    </div>
                </div>
                <div class="row flex-row">
                    <div class="col-lg-4">
                        <div class="card card-plain">
                            <div class="list-group list-group-chat list-group-flush">
                                @foreach($posts as $post)
                                <a href="javascript:;" class="list-group-item">
                                    <div class="media">
                                        <div class="media-body ml-2">
                                            <div class="justify-content-between align-items-center">
                                                <h3 class="mb-0 text-muted">{{$post->title}}</h3>
                                                <div>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
{{--                                            <span class="text-muted text-small col-11 p-0 text-truncate d-block">Computer users and programmers</span>--}}
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-plain">
                            <div class="card-header d-inline-block">
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-start">
                                    <div class="col-auto">
                                        <div class="card ">
                                            @isset($posts[0]->desc)

                                            <div class="card-body p-2">
                                                <p class="mb-1">
                                                    {{$posts[0]->desc}}
                                                </p>
                                                <div>
                                                    <small class="opacity-60"><i class="far fa-clock"></i> 3:14am</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 text-center">
                                        <span class="badge text-white">Wed, 3:27pm</span>
                                    </div>
                                </div>
                                @endisset

                            </div>
                    </div>
                </div>
            </div>
    @endsection
