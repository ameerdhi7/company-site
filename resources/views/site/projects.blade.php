@extends("layouts.master")
@section("content")
    <style>
        .footer-proj{
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
        h1{
            margin-top: 7rem;
        }
    </style>
    <h1 class="text-center text-white">OUR AWESOME PROJECTS</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
               <img src="/assets/img/bg4.png" class="w-100" alt="">
           </div>
       </div>

        <div class="row justify-content-center mt-3">
            <div class="col-12">
                <form class="form-inline">
                    <input  class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center  mb-4">
            <div class="col-12">
             <div class="card bg-dark">
                 <div class="card-header">
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-pricing">
                             <thead class="text-primary">
                             <tr>
                                 <th>TITLE</th>
                                 <th>LOCATION</th>
                                 <th>YEAR</th>
                                 <th>PARTNER</th>
                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                                 @foreach($projects as $project)
                                 <td>{{$project->title}}</td>
                                 <td>{{$project->location}}</td>
                                 <td>{{$project->year}}</td>
                                 <td><a href="/partners/{{$project->partner->id}}" class="text-primary">{{$project->partner->name}}</a></td>
                                 @endforeach
                             </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
            </div>
        </div>
    </div>
@endsection
