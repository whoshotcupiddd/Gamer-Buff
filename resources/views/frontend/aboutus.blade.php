@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">About Us</h1>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/aboutus.jpg') }}" class="img-fluid rounded" alt="About Us">
            </div>
            <div class="col-md-6">
                <p class="lead">Our company is dedicated to providing the best products at the best prices for gamers around the world. We have been in business for over 10 years and have a proven track record of excellent customer service. Our team of experts is always available to help you find the perfect product for your needs. We are committed to providing a safe and secure shopping experience for all of our customers. Thank you for choosing Gamer Buff!</p>
                <p>We believe in quality and customer satisfaction. Our mission is to bring the latest and greatest gaming products to our customers at unbeatable prices. We work closely with top brands and manufacturers to ensure that our inventory is always stocked with the best products on the market.</p>
                <p>Our customer service team is available 24/7 to assist you with any questions or concerns you may have. We are here to help you every step of the way, from browsing our website to receiving your order. Your satisfaction is our top priority.</p>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .lead {
            font-size: 1.25rem;
            color: #555;
        }

        img.img-fluid {
            max-width: 100%;
            height: auto;
        }

        p {
            margin-bottom: 1rem;
        }

        /* Adding some margin around the image and text */
        .col-md-6 img {
            margin-bottom: 20px;
        }
    </style>
@endpush
