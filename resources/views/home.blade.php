@extends('layout.app')
@section('title', 'Home')
@section('content')


<div class="container mt-2">
    <div class="row d-flex justify-content-left">
        <div class="col-md-9">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div> -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/mujib_right_pos1.jpg') }}" class="card-img-top" alt="...">
                    <!-- <div class="card-body">
                        <h5 class="card-title">Mujib 100</h5>
                        <p class="card-text">Mujib soto borso</p>
                    </div> -->
                </div>
                <div class="col-md-12 mt-2">
                    <!-- <img src="{{ asset('images/mujib_right_pos2.png') }}" class="card-img-top" alt="..."> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14594.605424177329!2d90.399655!3d23.866511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab29342ef553b334!2zU2Fya2VyIFJlbnQgQS1DYXIv4Ka44Kaw4KaV4Ka-4KawIOCmsOCnh-CmqOCnjeCmnyDgpo8t4KaV4Ka-4Kaw!5e0!3m2!1sen!2sbd!4v1666163022448!5m2!1sen!2sbd" width="305" height="235" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <div class="card-body">
                        <h5 class="card-title">Mujib 100</h5>
                        <p class="card-text">Mujib soto borso</p>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

</div>

<div class="container text-center mt-4">
    <h2>Car Orientation<h2>
            <div class="row mt-4">

                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/car1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Land Cruiser</h5> -->
                            <p class="card-text">Land Cruiser</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/car2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Goal</h5> -->
                            <p class="card-text">SUV</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/car3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Future Plan</h5> -->
                            <p class="card-text">Premium</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/car4.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Service Name</h5> -->
                            <p class="card-text">Premium Plus</p>
                        </div>
                    </div>
                </div>

            </div>
</div>


<!-- <div class="container text-center mt-4">
    <h2>Recent Project<h2>
            <div class="row mt-4">

                <div class="col-md-3">
                    <div class="card" style="width: 100%">
                        <img src="{{ asset('images/PRIVET-REAL CAR.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project One</h5>
                            <p class="card-text">Online Library Management System by html</p>
                            <a href="images/Introduction.pdf"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%">
                        <img src="{{ asset('images/PRIVET-REAL CAR.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project Two</h5>
                            <p class="card-text">Robotic Process Automation(RPA) by python</p>
                            <a href="images/Introduction.pdf"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%">
                        <img src="{{ asset('images/PRIVET-REAL CAR.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project Three</h5>
                            <p class="card-text">Pragati Management System by oracle</p>
                            <a href="images/Introduction.pdf"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 100%">
                        <img src="{{ asset('images/PRIVET-REAL CAR.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project Four</h5>
                            <p class="card-text">Robotic Process Automation(RPA) by python</p>
                            <a href="images/Introduction.pdf"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>

            </div>
</div> -->


@endsection