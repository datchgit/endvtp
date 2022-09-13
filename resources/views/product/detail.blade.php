@extends('layout.master')


@section('master')

<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>{{$detail->name}}</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active">Accueil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="product-left-box">
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="product-main-1 no-arrow slick-initialized slick-slider">
                                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2160px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 360px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/1.jpg" id="img-1" data-zoom-image="../assets/images/product/category/1.jpg" class="img-fluid image_zoom_cls-0 blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 360px; position: relative; left: -360px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/2.jpg" data-zoom-image="../assets/images/product/category/2.jpg" class="img-fluid image_zoom_cls-1 blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 360px; position: relative; left: -720px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/3.jpg" data-zoom-image="../assets/images/product/category/3.jpg" class="img-fluid image_zoom_cls-2 blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 360px; position: relative; left: -1080px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/4.jpg" data-zoom-image="../assets/images/product/category/4.jpg" class="img-fluid image_zoom_cls-3 blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 360px; position: relative; left: -1440px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/5.jpg" data-zoom-image="../assets/images/product/category/5.jpg" class="img-fluid image_zoom_cls-4 blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 360px; position: relative; left: -1800px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                            <div class="slider-image">
                                                <img src="../assets/images/product/category/6.jpg" data-zoom-image="../assets/images/product/category/6.jpg" class="img-fluid image_zoom_cls-5 blur-up lazyloaded" alt="">
                                            </div>
                                        </div></div></div>

                                        

                                        

                                        

                                        

                                        
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="bottom-slider-image left-slider no-arrow slick-top slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                                        

                                        

                                        

                                        

                                        

                                        
                                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1440px; transform: translate3d(-360px, 0px, 0px);"><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="-4" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="-3" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/4.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="-2" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/5.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="-1" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/6.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-current slick-active" style="width: 90px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-active" style="width: 90px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/2.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-active" style="width: 90px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-active" style="width: 90px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/4.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" style="width: 90px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/5.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide" style="width: 90px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/6.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="6" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="7" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/2.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="8" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="9" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/4.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="10" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/5.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div><div class="slick-slide slick-cloned" style="width: 90px;" tabindex="-1" data-slick-index="11" id="" aria-hidden="true">
                                            <div class="sidebar-image">
                                                <img src="../assets/images/product/category/6.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            </div>
                                        </div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="right-box-contain">
                            <h6 class="offer-top">VTP </h6>
                            <h2 class="name">{{$detail->name}}</h2>
                            <div class="price-rating">
                                <h3 class="theme-color price">{{$detail->price}} <del class="text-content">$58.46</del>
                                    </h3>
                                <div class="product-rating custom-rate">
                                    <ul class="rating">
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                    </ul>
                                    <span class="review">{{count($detail->comments)}} commentaires </span>
                                </div>
                            </div>

                            <div class="procuct-contain">
                                <p>{{Str::limit($detail->description,100)}}
                                </p>
                            </div>

                      



                            <div class="note-box product-packege">
                                <div class="cart_qty qty-box product-qty">
                                    <div class="input-group">
                                        <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                        <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                                <button onclick="location.href = 'cart.html';" class="btn btn-md bg-dark cart-button text-white w-100">Ajouter au panier</button>
                            </div>

                            <div class="buy-box">
                                <a href="wishlist.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <span>Liste des envies</span>
                                </a>

                             
                            </div>


                    
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="product-section-box">
                            <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                </li>

                               
                          

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Commentaires</button>
                                </li>


                                <li class="nav-item" role="">
                                    <button class="nav-link" >Contactez le vendeur</button>
                                </li>
                            </ul>

                            <div class="tab-content custom-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-description">
                                        <div class="nav-desh">
                                            <p>{{$detail->description}}</p>
                                        </div>

                                    
                                      

                                     
                                    </div>
                                </div>

                              

                              

                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="review-box">
                                        <div class="row g-4">
                                            <div class="col-xl-6">
                                               
                                            </div>

                                            <div class="col-xl-6">
                                                @auth
                                                <div class="review-title">
                                                    <h4 class="fw-500">Laisser un commentaire</h4>
                                                </div>

                                                <div class="row g-4">
                                                    

                                                  

                                                    <div class="col-12">
                                                        <div class="form-floating theme-form-floating">
                                                            <form action="{{route('comment.add')}}" method="POST">
                                                                @csrf

                                                                <textarea name="content" class="form-control" placeholder=" écrire ici..." id="floatingTextarea2" style="height: 150px"></textarea>
                                                                 <input type="hidden" name="product" value="{{$detail->id}}">
                                                                <input class="btn bg-light" type="submit" value="soumettre">
                                                            </form>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                @endauth
                                                @guest
                                                <div class="review-title text-end">
                                                    <h4 class="fw-500"><a href="{{route('login')}}">Laisser un commentaire....</a> </h4>
                                                </div> 
                                                @endguest
                                               
                                            </div>

                                            <div class="col-12">
                                                <div class="review-title">
                                                    <h4 class="fw-500">  Listes </h4>
                                                </div>

                                                <div class="review-people">
                                                    <ul class="review-list">
                                                    
                                                        @foreach ($comments as $c)
                                                        
                                                     
                                                        <li>
                                                            <div class="people-box">
                                                                <div>
                                                                    <div class="people-image">
                                                                        <img src="../assets/images/review/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                    </div>
                                                                </div>

                                                                <div class="people-comment">
                                                                    <a class="name" href="javascript:void(0)">{{$c->user->name}}</a>

                                                                    <p>
                                                                        {{$c->content}}
                                                                     </p>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content">{{$c->user->created_at}}</h6>
                                                                        
                                                                     

                                                                       
                                                                    </div>

                                                                 

                                                                   
                                                                </div>

                                                                <div class="row">
                                                                      @can('update',$c)
                                                                      <div class="col">
                                                                        <a class="btn" href="{{route('comment.delete',$c->id)}}">supprimer</a>
                                                                      </div>        
                                                                      @endcan
                                                                      @can('delete',$c)
                                                                      <div class="col">
                                                                        <a href="" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal{{$c->id}}" data-bs-whatever="@mdo">Modifier</a>
                                                                       
                                                                        
                                                                        <div class="modal fade" id="exampleModal{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                          <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                              </div>
                                                                              <form action="{{route('comment.edit')}}" method="POST">
                                                                                @csrf
                                                                              <div class="modal-body">
                                                                              
                    
                                                                                    <textarea  name="content" class="form-control"  style="height: 150px">
                                                                                    
                                                                                        
                                                                                    </textarea>
                                                                                     <input type="hidden" name="comment_id" value="{{$c->id}}">
                                                                                   
                                                                              
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                <input type="submit" class="btn btn-primary" value="Modifier">
                                                                              </div>
                                                                            </form>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                       </div>    
                                                                      @endcan
                                                                  

                                                                    
                                                                   </div>
                                                            </div>
                                                        </li>

                                                        @endforeach
                                                     

                                                       
                                                    </ul>
                                                </div>


                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="right-sidebar-box">
                   
                   @if (Session::get('add'))
                   <div class="alert-success">
                    <span>{{$session}}</span>
                   </div>
                       
                   @endif
                    <div class="vendor-box">
                        <div class="verndor-contain">
                            <div class="vendor-image">
                                <img src="../assets/images/product/vendor.png" class="blur-up lazyloaded" alt="">
                            </div>

                            <div class="vendor-name">
                                <h5 class="fw-500">Vendeur :  {{$detail->seller->sirname}}</h5>

                                <div class="product-rating mt-1">
                                    <ul class="rating">
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        </li>
                                    </ul>
                                    <span>(36 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <p class="vendor-detail">Nos produits sont de qualités et nos vendeurs sont certifiés par l'équipe technique de vtp</p>

                        <div class="vendor-list">
                            <ul>
                                <li>
                                    <div class="address-contact">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <h5>Addresse: <span class="text-content" class="text-danger"> Aucune Addresse</span></h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="address-contact">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                                        <h5>Contact Vtp : <span class="text-content">(+1)-123-456-789</span></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                  
                  
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product-list-section section-b-space">
    <div class="container-fluid-lg">
        <div class="title">
            <h2> Produits de même catégories</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                </svg>
            </span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-6_1 product-wrapper slick-initialized slick-slider slick-dotted">
                    

                    

                    

                    

                    

                    

                    
                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4142px; transform: translate3d(-1308px, 0px, 0px);"><div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control02" data-slick-index="-5" aria-hidden="true">
                   
                    </div><div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control03" data-slick-index="-4" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/4.png" class="img-fluid blur-up lazyloaded" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Snacks</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(5.0)</span>
                                    </div>
                                    <h6 class="unit">570 G</h6>
                                    <h5 class="price"><span class="theme-color">$12.52</span> <del>$13.62</del>
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Add
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control05" data-slick-index="-2" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/6.png" class="img-fluid blur-up lazyloaded" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(4.0)</span>
                                    </div>

                                    <h6 class="unit">550 G</h6>

                                    <h5 class="price"><span class="theme-color">$14.25</span> <del>$16.57</del>
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Add
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control06" data-slick-index="-1" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/7.png" class="img-fluid" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(3.8)</span>
                                    </div>

                                    <h6 class="unit">1 Kg</h6>

                                    <h5 class="price"><span class="theme-color">$12.68</span> <del>$14.69</del>
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Add
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
          
                    <div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control04" data-slick-index="11" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/5.png" class="img-fluid blur-up lazyloaded" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Snacks</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(3.8)</span>
                                    </div>
                                    <h6 class="unit">100 G</h6>
                                    <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.36</del>
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Add
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control05" data-slick-index="12" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/6.png" class="img-fluid blur-up lazyloaded" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">Vegetable</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(4.0)</span>
                                    </div>

                                    <h6 class="unit">550 G</h6>

                                    <h5 class="price"><span class="theme-color">$14.25</span> <del>$16.57</del>
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Add
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    @foreach ($otherproducts as $c)
                        
                  
                    <div class="slick-slide slick-cloned" style="width: 218px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control06" data-slick-index="13" aria-hidden="true">
                        <div class="product-box-3 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="product-left.html" tabindex="-1">
                                        <img src="../assets/images/cake/product/7.png" class="img-fluid" alt="">
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare">
                                            <a href="compare.html" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist" tabindex="-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">{{$c->category->name}}</span>
                                    <a href="product-left.html" tabindex="-1">
                                        <h5 class="name">{{$c->name}}</h5>
                                    </a>
                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </li>
                                        </ul>
                                        <span>(3.8)</span>
                                    </div>

                                    <h6 class="unit">{{$c->quantity}}</h6>

                                    <h5 class="price"><span class="theme-color">{{$c->price}}</span> 
                                    </h5>
                                   <div class="add-to-cart-box bg-white">
                                        <button class="btn btn-add-cart addcart-button" tabindex="-1">Panier
                                            <i class="fa-solid fa-plus bg-gray"></i></button>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="" tabindex="-1">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0" tabindex="-1">
                                                <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="" tabindex="-1">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach


                    

                </div></div><ul class="slick-dots" style="" role="tablist"><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="0" aria-selected="true">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 2" tabindex="-1">6</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control06" aria-controls="slick-slide06" aria-label="7 of 2" tabindex="-1">7</button></li></ul></div>
            </div>
        </div>
    </div>
</section>
 @include('sweetalert::alert')
@endsection