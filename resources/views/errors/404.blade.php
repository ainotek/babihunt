@extends('errors::index')
@section('content')
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mb-0">
            <div class="card-body p-4">
                <div class="account-box">
                    <div class="account-logo-box">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="account-content text-center mt-4">
                        <h1 class="text-error">404</h1>
                        <h3 class="text-uppercase text-danger mt-4">Page Not Found</h3>
                        <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry... it
                            happens to the best of us. You might want to check your internet connection. Here's a
                            little tip that might help you get back on track.</p>

                        <a class="btn btn-md btn-block btn-primary waves-effect waves-light mt-3" href="{{route('home')}}"> Return Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-body -->
    </div>
@stop
