@extends("layouts.master")
@section("content")
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block slide-height   w-100" src="./assets/img/slides/slide1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item rgba-black-strong">
                <img class="d-block slide-height w-100" src="./assets/img/slides/slide2.png" alt="Second slide">
            </div>
            <div class="carousel-item rgba-black-strong">
                <img class="d-block slide-height w-100" src="./assets/img/slides/slide3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section id="section1">
        <div class="container mt-5">
            <article>
                <div class="row justify-content-center">
                    <h1 class="text-white title">
                        {{trans("content.index_h1")}}
                    </h1>
                    <div class="col-auto">
                        <h4 class="">
                            {{trans("content.index_h4")}}

                        </h4>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-auto">
                <h1 class="text-white text-center title pb-3">                            {{trans("content.partners")}}
                </h1>
                <section class="customer-logos slider">
                    @foreach($partners as $partner)
                        <a href="/partners/{{$partner->id}}">
                            <div class="slide"><img src="/storage/{{$partner->logo}}"></div>
                        </a>
                    @endforeach
                </section>
            </div>
            <hr>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.5960558603283!2d44.341056884853465!3d33.32937446292302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15577eedb3279c7f%3A0xb65b741e5aea316b!2z2LTYp9ix2LkgMTQg2LHZhdi22KfZhtiMINio2LrYr9in2K8!5e0!3m2!1sar!2siq!4v1568200058140!5m2!1sar!2siq"
                        height="450" frameborder="0" style="border:1px solid black;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    <script src="/assets/js/plugins/slick.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    @endpush
