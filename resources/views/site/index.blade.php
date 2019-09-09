@extends("layouts.master")
@section("content")
    <style>
        .carousel-item{
background-color:rgba(0,0,0,0.7);
        }
    </style>
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner"
        >
            <div class="carousel-item active">
                <img class="d-block slide-height   w-100" src="./assets/img/slides/slide2.jpeg" alt="First slide">
            </div>
            <div class="carousel-item rgba-black-strong">
                <img class="d-block slide-height w-100" src="./assets/img/slides/slide1.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item rgba-black-strong">
                <img class="d-block slide-height w-100" src="./assets/img/slides/slide3.jpeg" alt="Third slide">
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
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1 class="text-center">
                        what we offer to our clients
                    </h1>
                </div>
            </div>

        </div>
    </section>
@endsection
