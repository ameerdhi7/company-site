@extends("layouts.master")
@section("content")
    <style>
        footer{
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
    </style>
    <div class="container fix-height">
        <div class="row mt-5 justify-content-center">
            <div class="col-auto mt-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-white text-center">{{$post->title}}</h1>
                    </div>
                    <div class="card-body">
                        <h4 class="text-muted">{{$post->desc}}</h4>
                    </div>
                    <div class="card-footer mb-2 mr-2">
                        {{$post->created_at->diffForHumans()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
