@extends('authentication.index')
@section('content')
    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-3 text-center">{{__('Connexion')}}</h5>
                                </div>
                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="{{route('authentication')}}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">{{__('Adresse Email')}}</label>
                                                <input name="email" class="form-control" type="email" id="email" required="" placeholder="example@exemple.com" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="" class="text-muted float-right"><small>{{__('Mot de passe oublié?')}}</small></a>
                                                <label for="password">{{__('Mot de passe')}}</label>
                                                <input name="password" class="form-control" type="password" required="" id="password" placeholder="{{__('Entrez votre mot de passe')}}" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">{{__('Connexion')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@stop
