@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-5" style="font-weight: 700; color: #333;">Checkout</h2>

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf

                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="John Doe" required>
                                </div>

                                <!-- Address -->
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control form-control-lg" name="address" placeholder="123 Main St, City, Country" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Card Number -->
                                <div class="col-md-6 mb-3">
                                    <label for="card" class="form-label">Card Number</label>
                                    <input type="text" class="form-control form-control-lg" name="card" placeholder="XXXX XXXX XXXX XXXX" required>
                                </div>

                                <!-- CVV Code -->
                                <div class="col-md-3 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control form-control-lg" name="cvv" placeholder="123" required>
                                </div>

                                <!-- Expiry Date -->
                                <div class="col-md-3 mb-3">
                                    <label for="expiry" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control form-control-lg" name="expiry" placeholder="MM/YY" required>
                                </div>
                            </div>

                            <!-- Total Amount -->
                            <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                                <h4 class="font-weight-bold">Total:</h4>
                                <h4 class="font-weight-bold text-primary">${{ number_format($total, 2) }}</h4>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Complete Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .card-body {
            padding: 0;
        }

        h2 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .form-label {
            font-size: 16px;
            color: #555;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .form-control-lg {
            background-color: #f8f9fa;
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 15px;
            font-size: 16px;
        }

        .form-control-lg::placeholder {
            color: #aab0b6;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 30px;
            font-size: 18px;
            padding: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .font-weight-bold {
            font-weight: 600;
            color: #333;
        }

        h4.text-primary {
            color: #007bff !important;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .card {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .form-control-lg {
                padding: 12px;
                font-size: 14px;
            }

            .btn-primary {
                font-size: 16px;
                padding: 12px;
            }
        }
    </style>
@endpush
