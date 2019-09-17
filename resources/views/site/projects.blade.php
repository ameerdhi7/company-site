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
    <h1 class="text-center text-white">{{trans("content.projects_page")}}</h1>
    <div class="container">

        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <form class="form-inline" action="/search/">
                    <input  class="form-control mr-1 " type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-auto">
                @empty($projects)
                    @if(app()->getLocale()=="en")
                    <h3 class="text-white text-center">No projects found :/</h3>
                        @else
                        <h3 class="text-white text-center"> /: لا توجد مشاريع او لم يتم الأضافة بعد</h3>
                    @endif
                @endempty
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
                                 <th>{{trans("content.project_title")}}</th>
                                 <th>{{trans("content.project_loc")}}</th>
                                 <th>{{trans("content.project_year")}}</th>
                                 <th>{{trans("content.project_partner")}}</th>
                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                                 @foreach($projects as $project)
                                 <td>{{$project->title}}</td>
                                 <td>{{$project->location}}</td>
                                 <td>{{$project->year}}</td>
                                 @isset($project->partner->name)
                                 <td><a href="/partners/{{$project->partner->id}}" class="font-bold text-white">{{$project->partner->name}}</a></td>
                                 @endisset
                                 @endforeach
                             </tr>
                             </tbody>
                             @if(url()->current()=="/projects")
                                 <span class="mt-2">{{$projects->links()}}</span>
                             @endif
                         </table>
                     </div>
                 </div>
             </div>
            </div>
        </div>
    </div>
@endsection
