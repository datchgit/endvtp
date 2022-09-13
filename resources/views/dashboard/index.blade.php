@extends('dashboard.layout.app')

@section('content')



    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">


            <div class="block-header">
                <div class="row">



                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Bienvenue {{ Auth::user()->name }}</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Votre Statut </li>
                            <li class="breadcrumb-item active">{{ Auth::user()->role->name }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Rapport en PDF</button>
                                <a href="/" class="btn btn-secondary" target="about_blank">Retourner à l'acceuil </a>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="body">
                            <div class="currency_state d-flex">
                                <div><img src="{{asset('assets/dashboard/images/coin/BTC.svg')}}" width="40" /></div>
                                <div class="ml-3">
                                    <div class="name">TOTAL PRODUIT </div>
                                    <h5 class="mb-0">{{ count($total_product) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="body">
                            <div class="currency_state d-flex">
                                <div><img src="{{asset('assets/dashboard/images/coin/neo.svg')}}" width="40" /></div>
                                <div class="ml-3">
                                    <div class="name">Total Commande</div>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="body">
                            <div class="currency_state d-flex">
                                <div><img src="{{asset('assets/dashboard/images/coin/DASH.svg')}}" width="40" /></div>
                                <div class="ml-3">
                                    <div class="name"> Total Vente  </div>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="body">
                            <div class="currency_state d-flex">
                                <div><img src="{{asset('assets/dashboard/images/coin/BTG.svg')}}" width="40" /></div>
                                <div class="ml-3">
                                    <div class="name">Total Message</div>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>




            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste De Vos Commandes</h2>
                            <ul class="header-dropdown">

                                <form action="">

                                    <input type="search" placeholder="Recherche Commande..." class="form-control" >
                                </form>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nom et Prenom</th>
                                            <th>Telephone</th>

                                             <th>Prix </th>
                                            <th>Date De Paiement</th>
                                            <th>Date Livraison</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Patrice Ange</td>
                                            <td>07 68 36 58 66</td>

                                            <td>
                                                300 €</td>
                                            <td>28-July-2018 06:51:51</td>
                                            <td>8-July-2018 06:51:51</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Accept</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" title="Edit"><i class="fa fa-eye"></i></button>
                                            </td

                                        </tr>









                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/bundles/apexcharts.bundle.js"></script>

<!-- page js file -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/pages/tables/jquery-datatable.js"></script>
<script src="../js/index7.js"></script>
</body>
</html>

@include('sweetalert::alert')
@endsection
