@extends('layout.app')
@section('title','Driver')
@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="bg-success p-4 text-dark text-center bg-opacity-25">Driver Information</div>
    </div>
</div>

<div class="container text-center mt-4">
    <div class="row mt-4">

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sobuj</h5>
                    <p class="card-text">+88 01681100022</p>
                    <p class="card-text">Experiance 10 Year's</p>
                </div>    
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Halim</h5>
                    <p class="card-text">+88 01681100022</p>
                    <p class="card-text">Experiance 10 Year's</p>
                </div>    
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mojjamel</h5>
                    <p class="card-text">+88 01681100022</p>
                    <p class="card-text">Experiance 10 Year's</p>
                </div>    
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amam</h5>
                    <p class="card-text">+88 01681100022</p>
                    <p class="card-text">Experiance 10 Year's</p>
                </div>    
            </div>
        </div>

    </div>
</div>

@endsection