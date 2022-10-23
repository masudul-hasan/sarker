@extends('layout.app')
@section('title','About')
@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="bg-success p-4 text-dark text-center bg-opacity-25">About Me</div>
    </div>
</div>

<div class="container text-center mt-4">
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
</div>

@endsection