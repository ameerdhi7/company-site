@extends("layouts.master")
@section("content")

    <section class=" py-5 " id="about-us">
        <div class="container mt-5">
            <div class="row align-items-center">
                @if(app()->getLocale()=="ar")
                    <div class="col-md-6 ">
                        <img src="/assets/img/team.png"alt="">
                    </div>
                <div class="col-md-6 align-baseline">
                    <h1 class='text-info right'>{{trans("content.about_1")}}<br><span class="text-white mt-3">{{trans("content.about_2")}}</span></h1>
                    <h4 class="right">{{trans("content.about_3")}}</h4>
                    <a href="/contact" class="btn right btn-warning">{{trans("content.contact")}}</a>
                </div>
                @else
                    <div class="col-md-6">
                        <h1 class='text-info'>{{trans("content.about_1")}}<br><span class="text-white mt-3">{{trans("content.about_2")}}</span></h1>
                        <h4>{{trans("content.about_3")}}</h4>
                        <a href="/contact" class="btn btn-warning">CONTACT US</a>
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/img/team.png"alt="">
                    </div>
                @endif

            </div>
            <div class="row justify-content-center">
             <div class="col-12">
                 <div class="info info-hover">
                     <div class="icon icon-warning">
                         <img class="bg-blob" src="../assets/img/feature-blob/success.png">
                         <i class="tim-icons icon-single-02"></i>
                     </div>
                     <h1 class="info-title">{{trans("content.manager")}}</h1>
                     <h3 class="description">{{trans("content.manager_name")}}</h3>
                 </div>
             </div>

            </div>
        </div>
        <br/>
    </section>
@endsection
