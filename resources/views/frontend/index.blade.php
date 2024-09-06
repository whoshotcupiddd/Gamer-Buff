<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div id="gameCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/wukong.jpeg') }}" class="d-block w-100" alt="Black Myth: Wukong">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/minecraft.jpg') }}" class="d-block w-100" alt="Minecraft">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/r6.jpg') }}" class="d-block w-100" alt="Rainbow Six Siege">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/valorant.jpg') }}" class="d-block w-100" alt="Valorant">
                </div>
            </div>
            <a class="carousel-control-prev" href="#gameCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#gameCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection


