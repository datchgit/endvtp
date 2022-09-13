@extends('layout.master')
@section('master')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Nos catégories <span>vtp</span></h1>
         
          
        </div><!-- End .container -->
    </div><!-- End .page-header -->
 
    <div class="page-content" style="margin-top: 30px">
        <div class="container">
            

            <div class="tab-content">
                <div class="tab-pane p-0 fade active show" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            @foreach ($categories as $cat)
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/demos/demo-2/products/product-7-1.jpg')}}" alt="Product image" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>{{$cat->name}}</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{$cat->name}}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">{{$cat->description}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                      
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="{{route("cate.productlink",$cat->id)}}" class="btn-product btn-cart"><span>voir les produits</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            @endforeach
                   
                                    
                        

                            
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->

               
        
            </div><!-- End .tab-content -->
        </div>
    </div>
</main>

@endsection