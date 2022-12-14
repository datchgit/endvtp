@extends('dashboard.layout.app')
@section('content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Detail Sur Le Produit </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Categories </li>
                        <li class="breadcrumb-item active">{{ $product->category->name }}</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                            <button type="button" class="btn btn-primary"> Accueil</button>
                            <button type="button" class="btn btn-secondary"> Liste</button>
                        </div>
                        <div class="p-2 d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">


        </div>



        <div class="row clearfix">

            <div class="col-lg-12">

                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="preview col-lg-4 col-md-12">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="product_1"><img src="{{asset('cover/'.$product->cover_image )}}" class="img-fluid"></div>
                                    <div class="tab-pane" id="product_2"><img src="{asset('assets/dashboard/images/ecommerce/2.png')}}" class="img-fluid"></div>
                                    <div class="tab-pane" id="product_3"><img src="{asset('assets/dashboard/images/ecommerce/3.png')}}"></div>
                                    <div class="tab-pane" id="product_4"><img src="{asset('assets/dashboard/images/ecommerce/4.png')}}"></div>
                                    <div class="tab-pane" id="product_5"><img src="assets/images/ecommerce/5.png" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title mb-0">{{ $product->name }} </h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-muted"></span>
                                    </div>
                                    <span class="m-l-10">41 reviews</span>
                                </div>
                                <hr>
                                <h5 class="price m-t-0">Prix Original: <span class="text-warning">{{  $product->price }} ???</span></h5>
                                <p class="product-description">{{  Str::limit($product->description, 250) }} </p>
                                <p class="product-description"> Pays De Provenance {{ $product->country }}</p>
                                <p class="product-description"> Ville  De Provenance {{ $product->city }}</p>
                                <hr>
                                <div class="action">

                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addcontact">Modifier Produit</button>
                                        @if($product->statut =="disponible")
                                    <button class="btn btn-success" type="button"><span class="icon-heart"></span>Produit Disponible</button>
                                        @elseif($product->statut =="stock vide")
                                        <button class="btn btn-danger" type="button"><span class="icon-heart"></span>Stock Vide</button>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><div class="col-lg-12">
                <!-- Default Size -->
                <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="title" id="defaultModalLabel">Modifer le Produit</h6>
                            </div>
                              

                                    <div class="modal-body">
                                        <form action="{{ route('update.product') }}" method="POST">
                                            @csrf
                                        @method('PUT')
                                        <div class="row clearfix">

                                            <input type="hidden" name="product_id"  value="{{  $product->id }}">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Nom du produt </label>
                                                    <input type="text" class="form-control"  name="name" value="{{ $product->name }}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Nom Du Produit </label>
                                                    <input type="text" class="form-control" name="slug"  value="{{ $product->slug }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Pays De Provenance Du produit  </label>
                                                    <input type="text" class="form-control"  name="country"  value="{{ $product->country }}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Ville De Provenance Du produit</label>
                                                    <input type="text" class="form-control"  name="city" value="{{ $product->city }}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Statut  actuelle:  {{  $product->statut}} </label>
                                                    <select name="statut" id="" class="form-control">
                                                        <option value="disponible">disponible</option>
                                                        <option value="stock vide ">indisponible</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Prix Du Produit </label>
                                                    <input type="text" class="form-control"  name="price" value="{{ $product->price }}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Quantite Du produit  </label>
                                                    <input type="text" class="form-control"  name="quantity" value="{{ $product->quantity }}">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Inserer les novelles Images  </label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Cat??gorie   </label>
                                                    <select name="category_id" id="" class="form-control">

                                                        <option value="{{$product->category->id }}">{{ $product->category->name }}</option>
                                                        @foreach ($categories as $c)
                                                         @if (strcmp($product->category->name, $c->name)!=0)
                                                         <option value="{{ $c->id}}">{{ $c->name }}</option>                                                            
                                                         @endif           
                                                        @endforeach
                                                     
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Description du produit </label>
                                                    <textarea  id="" cols="20" rows="5" class="form-control" name="description">{{ $product->description }}</textarea>

                                                </div>

                                            </div>

                                            <div class="col-8">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Modifier Le Produit </button>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FERMER </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                            


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
