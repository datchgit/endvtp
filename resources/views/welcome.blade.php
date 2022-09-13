@extends("layout.master")
@section('master')



    <!-- Home Section Start -->
    <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8">
                    <div class="home-contain h-100">
                        <img src="{{asset('assets/images/baner.jpg')}}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-center-left w-75 position-relative mend-auto">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="w-75 text-uppercase poster-1">Stay home & delivered your <span
                                        class="daily">Daily Needs</span></h1>
                                <p class="w-58 d-none d-sm-block">Many organizations have issued official
                                    statements encouraging people to reduce their intake of sugary drinks.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none ratio_156">
                    <div class="home-contain h-100">
                        <img src="{{asset('assets/images/baner2.jpg')}}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm w-75">
                            <div class="section-t-space">
                                <h2 class="mt-0 text-danger">45% <span class="discount text-title">OFF</span>
                                </h2>
                                <h3 class="theme-color">Real Refresement</h3>
                                <h5 class="text-content">Only this week, Don't miss..</h5>
                                <a href="shop-left-sidebar.html" class="shop-button">Shop Now <i
                                        class="fa-solid fa-right-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Category Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Consulter nos catégories</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>Top Categories</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-9">



                        @foreach (  $category as  $category  )
                        <div>
                            <a href="{{route('cate.productlink', $category->id)}}" class="category-box wow fadeInUp">
                                <div>
                                    <img src="assets/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    <h5>{{$category->name}}</h5>
                                </div>
                            </a>
                        </div>

                        @endforeach
                       
                    
                     
                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Discount Section Start -->
  
    <!-- Discount Section End -->

    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>FRUIT & VEGETABLES</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>A virtual assistant collects the products from your list</p>
            </div>
            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Fresh Brown Coconut</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/2.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Fresh Organic Broccoli Crown</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/3.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Fresh Cavendish Banana</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/4.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Fresh Organic Kivi</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/5.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Organic Green Lemon</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/6.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Organic Orange</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/7.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Green lettuce</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/8.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Green Papaya</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/9.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Green Capsicum</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/10.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Organic Fresh Strawberry</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/7.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Green lettuce</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/8.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Green Papaya</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
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
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    

    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>BREAKFAST & DAIRY</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>A virtual assistant collects the products from your list</p>
            </div>
            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/11.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Belgian Waffle</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/12.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Sandwich Cookies</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/13.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Butter Croissant</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/14.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Frooti Mango Drink</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/15.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Bambino Elbow Macaroni Pasta</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/16.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Muffets Burger Bun</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/17.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Tuffets Britannia Cheezza</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/18.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Chicken egg</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/19.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Yogurt</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/20.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Organic Orange Jam</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/17.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Tuffets Britannia Cheezza</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/18.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Chicken egg</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row m-0">
                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/13.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Butter Croissant</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0">
                                <div class="product-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="assets/images/veg-2/product/14.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option justify-content-around">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-left.html">
                                            <h6 class="name name-2 h-100">Frooti Mango Drink</h6>
                                        </a>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <div class="counter-box">
                                            <h6 class="sold theme-color">$ 80.00</h6>

                                            <div class="addtocart_btn">
                                                <button class="add-button addcart-button btn buy-button text-light">
                                                    <span>Add</span>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
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
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-1 ratio_65 no-arrow product-wrapper">
                        <div>
                            <div class="product-slider wow fadeInUp">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="assets/images/veg-2/pro/1.jpg" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Hot Deals on New Items</h3>
                                        </a>
                                        <h5>Daily Essentials Eggs & Dairy</h5>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.05s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="assets/images/veg-2/pro/2.jpg" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Organic Meat Prepared</h3>
                                        </a>
                                        <h5>Delivered to Your Home</h5>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.1s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="assets/images/veg-2/pro/3.jpg" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Buy More & Save More</h3>
                                        </a>
                                        <h5>Fresh Vegetables & Fruits</h5>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-slider wow fadeInUp" data-wow-delay="0.15s">
                                <a href="shop-left-sidebar.html" class="product-slider-image">
                                    <img src="assets/images/veg-2/pro/4.jpg" class="w-100 blur-up lazyload rounded-3"
                                        alt="">
                                </a>

                                <div class="product-slider-detail">
                                    <div>
                                        <a href="shop-left-sidebar.html" class="d-block">
                                            <h3 class="text-title">Fresh Fruits on Go</h3>
                                        </a>
                                        <h5>Fresh Vegetables & Fruits</h5>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>By <span class="theme-color">Nestfood</span></h6>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation product-button btn-sm">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Top Selling Section Start -->
    <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="slider-4-1">
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Top Selling</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/1.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Tuffets Whole Wheat Bread</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/2.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Potato</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/3.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Green Chilli</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Muffets Burger Bun</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 70.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Trending Products</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/5.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Good Life Refined Sunflower Oil</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/6.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Good Life Raw Peanuts</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/7.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Good Life Raw Peanuts</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 85.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/8.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Frooti Mango Drink</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Recently added</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/9.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Tuffets Britannia Cheezza</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/10.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Long Life Toned Milk</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/11.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Organic Tomato</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/12.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Organic Pure Honey</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 90.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Top Rated</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/13.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Good Life Walnut Kernels</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/14.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Cherry Red Premium Imported</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/15.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Meatigo Premium Goat Curry</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/16.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>Dates Medjoul Premium Imported</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 70.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->

   



@include('sweetalert::alert')

@endsection