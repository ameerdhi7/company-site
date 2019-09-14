@extends("layouts.master")
@section("content")
        <div class="page-header header-filter contactus-3">
            <div class="page-header-image" style="background-image: url('/assets/img/andre-benz.jpg');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="title">{{trans("content.contact_page1")}}</h1>
                        <h3>{{trans("content.contact_page2")}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="row infos mb-5">
                    <div class="col-lg-4">
                        <div class="info info-hover">
                            <div class="icon icon-primary">
                                <img class="bg-blob" src="../assets/img/feature-blob/primary.png">
                                <i class="tim-icons icon-square-pin"></i>
                            </div>
                            <h4 class="info-title">{{trans("content.contact_address")}}</h4>
                            <p class="description">Baghdad-al-Mansour-14 Ramadan street</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info info-hover">
                            <div class="icon icon-info">
                                <img class="bg-blob" src="../assets/img/feature-blob/info.png">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                            <h4 class="info-title">Email</h4>
                            <p class="description">info@uoid.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info info-hover">
                            <div class="icon icon-warning">
                                <img class="bg-blob" src="../assets/img/feature-blob/warning.png">
                                <i class="tim-icons icon-mobile"></i>
                            </div>
                            <h4 class="info-title">{{trans("content.contact_phone")}}</h4>
                            <p class="description">009647901329396</p>
                            <p class="description">009647719424271</p>
                        </div>
                    </div>

                </div>
                <div class="row mt-5 mb-4 pt-5">
                    <div class="col-md-8 ml-auto mr-auto text-center mt-5">
                        <span class="badge badge-info">{{trans("content.contact_page3")}}</span>
                        <h1 class="title">{{trans("content.contact_page4")}}
                        </h1>
                        <h4 class="desc">Whether you have questions or you would just like to say hello, contact us.</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        @if($errors->any())
                            <div class="alert black mt-0" role="alert">
                                <h3 class="red">Please Enter Vaild Data</h3>
                                <ol>
                                    @foreach($errors->all() as $error)
                                        <li class="mt-2  text-center text-white"><h3>{{$error}}</h3></li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto ">
                        <form  action="/contact" class="p-3" id="contact-form" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>{{trans("content.contact_full_name")}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                                            </div>
                                            <input type="text" name="full_name" class="form-control" placeholder="Full Name..." aria-label="First Name...">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>{{trans("content.contact_email")}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="Email Here...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{trans("content.contact_message")}}</label>
                                    <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 ml-auto">
                                        <button type="submit" class="btn btn-secondary btn-round pull-right">{{trans("content.contact_button")}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
