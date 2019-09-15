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
               <h1 class="title text-center text-white mt-4 ">{{trans("content.album_page")}}</h1>
           </div>
       </div>
       <div class="row justify-content-center mt-1">
           @empty($images)
               <h1 class="text-muted mt-2">No images added yet</h1>
           @endempty
       @foreach($images as $image)
           <div class="col-md-4">
               <div class="card mb-4 box-shadow">
                   <img style="border:1px solid whitesmoke" class="card-img-top" src="/storage/{{$image->image}}">
                   <div class="card-body">
                       <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach
               <br>
       </div>

   </div>
    @endsection
