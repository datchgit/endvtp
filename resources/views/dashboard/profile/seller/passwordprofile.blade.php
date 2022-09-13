@extends('dashboard.layout.app')
@section('content')



    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>GESTION COMPTE</h2>

                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"> Accueil</button>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modifier Votre Mot De Passe </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('user-password.update')}}" method="post" >
                                @csrf
                                @method('PUT')

                                    @if(session('status') =='password-updated')
                                    <div class="alert alert-success">
                                            Mot de passe modifié avec succes

                                    </div>

                                    @endif

                                <div class="form-group">
                                    <label>Ancien Mot de passe   @error('current_password', 'updatePassword')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>

                                <div class="form-group">
                                    <label>Nouveau de mot passe  @error('password' , 'updatePassword')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror  </label>
                                    <input type="password" class="form-control"  name="password">
                                </div>

                                <div class="form-group">
                                    <label>Confirmer Votre Nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>

                                <button type="submit" class="btn btn-dark">Je Modifie Mon Mot de passe</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>



@endsection
