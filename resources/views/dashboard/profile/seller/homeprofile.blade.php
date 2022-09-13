@extends('dashboard.layout.app')

@section('content')


    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>GESTION DE COMPTE</h2>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="" class="btn btn-primary" >Acccueil</a>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <img src="{{asset('assets/dashboard/images/image-gallery/1.jpg')}}" alt=""  class="img-fluid rounded mb-3">
                            <h6 class="mb-4 font-weight-bold">je modifie mes informations de mon compte</h6>

                            <a href="{{route('seller.update.form')}}" class="btn btn-primary" role="button">Cliquez - Ici </a>
                        </div>
                    </div>
                </div>





                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <img src="{{asset('assets/dashboard/images/image-gallery/7.jpg')}}" alt=""  class="img-fluid rounded mb-3">
                            <h6 class="mb-4 font-weight-bold">je  renseigne  de mes informations vendeurs</h6>

                            <a href="{{ route('seller.register.form')}}" class="btn btn-primary" role="button">Cliquez -ici</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <img src="{{asset('assets/dashboard/images/image-gallery/8.jpg')}}" alt=""  class="img-fluid rounded mb-3">
                            <h6 class="mb-4 font-weight-bold"> Je  modifie  le mot mot de passe De Mon Compte</h6>

                            <a href="{{ route('seller.update.password.form') }}" class="btn btn-primary" role="button">Cliquez-ici </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
