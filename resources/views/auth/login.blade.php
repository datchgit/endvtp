@extends('layout.master')

@section('master')

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2 class="mb-2">Connexion</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Connexion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Connexion section start -->
<section class="log-in-section background-image-2 section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="../assets/images/inner-page/log-in.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3>Bienvenu sur vtp </h3>
                        <h4>Connectez vous à votre compte</h4>
                    </div>

                    <div class="input-box">
                        <form class="row g-4" action="{{route('login')}}" method='POST'>
                            @csrf
                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
                                    <label for="email">Addresse Email 
                                        @error('email')

                                        <small class="text-danger">{{$message}}</small>    
                                        @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Password" name="password">
                                    <label for="password" >Password

                                        @error('password')

                                        <small class="text-danger">{{$message}}</small>    
                                        @enderror
                                    </label>
                                </div>
                            </div>

                     

                            <div class="col-12">
                                <button class="btn btn-animation w-100 justify-content-center" type="submit">Connexion</button>
                            </div>
                        </form>
                    </div>


                    <div class="other-log-in">
                        <h6></h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Vous n'avez pas de compte  ?</h4>
                        <a href="sign-up.html">Inscrivez vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Connexion section end -->

@endsection