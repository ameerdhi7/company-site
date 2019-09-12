@extends("layouts.master")
@section("content")
    <style>
        footer{
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
    </style>
   <div class="container">
       <div class="row mt-5 justify-content-center">
           <div class="col-auto">
               <h1 class="title text-center text-white ">OUR ALBUM</h1>
           </div>
       </div>
       <div class="row justify-content-center mt-1">
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
       </div>

   </div>

    @endsection
