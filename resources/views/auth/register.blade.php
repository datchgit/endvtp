 @extends('layout.master')

 @section('master')


  <!-- Breadcrumb Section Start -->
  <section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2 class="mb-2">   Inscription</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active"> Inscription</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!--    Inscription section start -->
<section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="../assets/images/inner-page/sign-up.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3>Bienvenue sur Vtp</h3>
                        <h4>Créer votre compte</h4>
                    </div>

                    <div class="input-box">
                        <form class="row g-4" action="{{route('register')}}" method="POST">
                            @csrf

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                 
                                    <select name="role" id="" class="form-control">
                                        <option value="">Choisissez votre statut sur vtp </option>
                                        @foreach ($roles as $r)
                                          <option value="{{$r->id}}">{{$r->name}}</option>                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <label for=""> 
                                @error('role')
                                <small class="text-danger">{{$message}}</small>    
                                @enderror
                            </label>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input name="name" type="text" class="form-control" id="fullname" placeholder="Entrer votre d'utilisateur">
                                    <label for="fullname">Nom d'utilisateur
                                        @error('name')

                                        <small class="text-danger">{{$message}}</small>    
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Addresse Email ">
                                    <label for="email">Email
                                        @error('email')

                                        <small class="text-danger">{{$message}}</small>    
                                        @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input name="password" type="password" class="form-control" id="password"
                                        placeholder="Entrer votre Password">
                                    <label for="password">Password
                                        @error('password')

                                        <small class="text-danger">{{$message}}</small>    
                                        @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input name="password_confirmation" type="password" class="form-control" id="password"
                                        placeholder="Entrer votre Password">
                                    <label for="password_confirmation">Confirmer votre Password</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                            id="flexCheckDefault" required>
                                        <label class="form-check-label" for="flexCheckDefault" >J'accept les conditions
                                          </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit">Inscription</button>
                            </div>
                        </form>
                    </div>

               

                 

                    <div class="sign-up-box">
                        <h4>Vous avez déjà un compte ?</h4>
                        <a href="log-in.html">Connectez vous</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
        </div>
    </div>
</section>
<!--    Inscription section end -->

 @endsection