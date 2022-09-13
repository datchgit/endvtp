

@extends('layout.master')

@section('master')

<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Nom de la catégorie</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                           
                            <li class="breadcrumb-item active" aria-current="page">
                                <input class="form-control" type="text" placeholder="rechercher via le nom ">
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
               

                <div class="top-filter-category" id="collapseExample">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-3 col-md-6">
                            <div class="category-title">
                                <h3>Pack Size</h3>
                            </div>
                            <ul class="category-list custom-padding custom-height">
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="fruit">
                                        <label class="form-check-label" for="fruit">
                                            <span class="name">Fruits &amp; Vegetables</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="cake">
                                        <label class="form-check-label" for="cake">
                                            <span class="name">Bakery, Cake &amp; Dairy</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="behe">
                                        <label class="form-check-label" for="behe">
                                            <span class="name">Beverages</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="snacks">
                                        <label class="form-check-label" for="snacks">
                                            <span class="name">Snacks &amp; Branded Foods</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="beauty">
                                        <label class="form-check-label" for="beauty">
                                            <span class="name">Beauty &amp; Household</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="pets">
                                        <label class="form-check-label" for="pets">
                                            <span class="name">Kitchen, Garden &amp; Pets</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="egg">
                                        <label class="form-check-label" for="egg">
                                            <span class="name">Eggs, Meat &amp; Fish</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="food">
                                        <label class="form-check-label" for="food">
                                            <span class="name">Gourment &amp; World Food</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="care">
                                        <label class="form-check-label" for="care">
                                            <span class="name">Baby Care</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="fish">
                                        <label class="form-check-label" for="fish">
                                            <span class="name">Fish &amp; Seafood</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="marinades">
                                        <label class="form-check-label" for="marinades">
                                            <span class="name">Marinades</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="lamb">
                                        <label class="form-check-label" for="lamb">
                                            <span class="name">Mutton &amp; Lamb</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="other">
                                        <label class="form-check-label" for="other">
                                            <span class="name">Port &amp; other Meats</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="pour">
                                        <label class="form-check-label" for="pour">
                                            <span class="name">Pourltry</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="salami">
                                        <label class="form-check-label" for="salami">
                                            <span class="name">Sausages, bacon &amp; Salami</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="category-title">
                                <h3>Price</h3>
                            </div>
                            <div class="range-slider">
                                <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">$. 0</span><span class="irs-max" style="visibility: visible;">$. 1.000.000</span><span class="irs-from" style="visibility: visible; left: 0%;">$. 0</span><span class="irs-to" style="visibility: visible; left: 35.4798%;">$. 500.000</span><span class="irs-single" style="visibility: hidden; left: 12.1514%;">$. 0 - $. 500.000</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 3.56379%; width: 46.4362%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to type_last" style="left: 46.4362%;"></span></span><input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="category-title">
                                <h3>Discount</h3>
                            </div>
                            <ul class="category-list">
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="name">upto 5%</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault1">
                                        <label class="form-check-label" for="flexCheckDefault1">
                                            <span class="name">5% - 10%</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            <span class="name">10% - 15%</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            <span class="name">15% - 25%</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault4">
                                        <label class="form-check-label" for="flexCheckDefault4">
                                            <span class="name">More than 25%</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="category-title">
                                <h3>Category</h3>
                            </div>
                            <ul class="category-list custom-padding custom-height">
                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault5">
                                        <label class="form-check-label" for="flexCheckDefault5">
                                            <span class="name">400 to 500 g</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault6">
                                        <label class="form-check-label" for="flexCheckDefault6">
                                            <span class="name">500 to 700 g</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault7">
                                        <label class="form-check-label" for="flexCheckDefault7">
                                            <span class="name">700 to 1 kg</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault8">
                                        <label class="form-check-label" for="flexCheckDefault8">
                                            <span class="name">120 - 150 g each Vacuum 2 pcs</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault9">
                                        <label class="form-check-label" for="flexCheckDefault9">
                                            <span class="name">1 pc</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault10">
                                        <label class="form-check-label" for="flexCheckDefault10">
                                            <span class="name">1 to 1.2 kg</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault11">
                                        <label class="form-check-label" for="flexCheckDefault11">
                                            <span class="name">2 x 24 pcs Multipack</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault12">
                                        <label class="form-check-label" for="flexCheckDefault12">
                                            <span class="name">2x6 pcs Multipack</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault13">
                                        <label class="form-check-label" for="flexCheckDefault13">
                                            <span class="name">4x6 pcs Multipack</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault14">
                                        <label class="form-check-label" for="flexCheckDefault14">
                                            <span class="name">5x6 pcs Multipack</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault15">
                                        <label class="form-check-label" for="flexCheckDefault15">
                                            <span class="name">Combo 2 Items</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault16">
                                        <label class="form-check-label" for="flexCheckDefault16">
                                            <span class="name">Combo 3 Items</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault17">
                                        <label class="form-check-label" for="flexCheckDefault17">
                                            <span class="name">2 pcs</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault18">
                                        <label class="form-check-label" for="flexCheckDefault18">
                                            <span class="name">3 pcs</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault19">
                                        <label class="form-check-label" for="flexCheckDefault19">
                                            <span class="name">2 pcs Vacuum (140 g to 180 g each
                                                )</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault20">
                                        <label class="form-check-label" for="flexCheckDefault20">
                                            <span class="name">4 pcs</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault21">
                                        <label class="form-check-label" for="flexCheckDefault21">
                                            <span class="name">4 pcs Vacuum (140 g to 180 g each
                                                )</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault22">
                                        <label class="form-check-label" for="flexCheckDefault22">
                                            <span class="name">6 pcs</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault23">
                                        <label class="form-check-label" for="flexCheckDefault23">
                                            <span class="name">6 pcs carton</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="flexCheckDefault24">
                                        <label class="form-check-label" for="flexCheckDefault24">
                                            <span class="name">6 pcs Pouch</span>
                                            <span class="number">(15)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                
                   @foreach ($products as $p)
                   <div>
                    <div class="product-box-3 h-100 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="product-header">
                            <div class="product-image">
                                <a href="product-left.html">
                                    <img src="{{asset('cover/'.$p->cover_image)}}" class="img-fluid blur-up lazyloaded" alt="">
                                </a>

                                <ul class="product-option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Voir +">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" + Détail">
                                        <a href="{{route('products.detail',$p->id)}}">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist">
                                        <a href="wishlist.html" class="notifi-wishlist">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-detail">
                                <span class="span-name">{{$p->category->name}}</span>
                                <a href="product-left.html">
                                    <h5 class="name">{{$p->name}}</h5>
                                </a>
                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                    cheese macaroni cheese croque monsieur.</p>
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
                                <h6 class="unit">Qte: {{$p->quantity}}</h6>
                                <h5 class="price"><span class="theme-color"> {{$p->price}} €</span> <del> </del>
                                </h5>
                               <div class="add-to-cart-box bg-white">
                                    <button class="btn btn-add-cart addcart-button">Ajouter au panier
                                        <i class="fa-solid fa-plus bg-gray"></i></button>
                                    <div class="cart_qty qty-box">
                                        <div class="input-group bg-white">
                                            <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                            <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
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
                 

                 
              
              
                </div>

                <nav class="custome-pagination">
                    <ul class="pagination justify-content-center">
                      {{$products->links()}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
