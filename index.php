<?php require_once('top.php') ?>
<?php require_once('./includes/header.inc.php') ?>

<div class="main">
    <div class="mainWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="categoryList">
                        <div class="cl_header">
                            <h5>Categories</h5>
                        </div>
                        <input type="checkbox" name="catmenuCheckbox" id="catmenuCheckbox" />
                        <label for="catmenuCheckbox" class="toggle-menu"></label>
                        <div class="cl_list">
                            <ul>
                                <li><a href="#">TV & Home Appliances</a></li>
                                <li><a href="#">Health & Beauty</a></li>
                                <li><a href="#">Babies & Toys</a></li>
                                <li><a href="#">Groceries & Pets</a></li>
                                <li><a href="#">Home & Lifestyle</a></li>
                                <li><a href="#">Women's Fashion</a></li>
                                <li><a href="#">Men's Fashion</a></li>
                                <li><a href="#">Watches & Accessories</a></li>
                                <li><a href="#">Sports & Outdoor</a></li>
                                <li><a href="#">Automotive</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./end category list -->
                </div>
                <div class="col-12 col-lg-9">
                    <div class="mainSlider">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo HTTP_PATH ?>img/slider-1" class="d-block w-100" alt="Slider 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo HTTP_PATH ?>img/slider-2" class="d-block w-100" alt="Slider 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <img src="<?php echo HTTP_PATH ?>img/prev-icon.svg" alt="Previous">
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <img src="<?php echo HTTP_PATH ?>img/next-icon.svg" alt="Previous">
                            </a>
                        </div>
                    </div>
                    <!-- ./end main slider -->
                    <div class="threecates">
                        <div class="threecates__cat">
                            <a href="#">
                                <div class="img">
                                    <img src="<?php echo HTTP_PATH ?>img/category_1.jpg" class="img-fluid" alt="Category Name as alt">
                                </div>
                                <div class="details">
                                    <div class="name">Shoes</div>
                                    <div class="item_count">1564</div>
                                </div>
                            </a>
                        </div>
                        <div class="threecates__cat">
                            <a href="#">
                                <div class="img">
                                    <img src="<?php echo HTTP_PATH ?>img/category_2.jpg" class="img-fluid" alt="Category Name as alt">
                                </div>
                                <div class="details">
                                    <div class="name">Camera</div>
                                    <div class="item_count">1564</div>
                                </div>
                            </a>
                        </div>
                        <div class="threecates__cat">
                            <a href="#">
                                <div class="img">
                                    <img src="<?php echo HTTP_PATH ?>img/category_3.jpg" class="img-fluid" alt="Category Name as alt">
                                </div>
                                <div class="details">
                                    <div class="name">Phone accessories</div>
                                    <div class="item_count">1564</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ./end threecates -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./end main wrapper -->

    <div class="bg-primary servicesList mt-3">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <svg width="37px" height="37px" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg> <span class="ml-2">Free Shipping</span>
                </div>
                <div class="col-6 col-md-3">
                    <svg width="37px" height="37px" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                    <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg> <span class="ml-2">24X7 Service</span>
                </div>
                <div class="col-6 col-md-3">
                    <svg width="37px" height="37px" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg> <span class="ml-2">Easy Return</span>
                </div>
                <div class="col-6 col-md-3">
                    <svg width="37px" height="37px" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                    <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z"/>
                    </svg> <span class="ml-2">Online Payment</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ./end servicesList -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-5">
                <h4 class="sub-title">On Sale</h4>
                <div class="onsale">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/onsale.jpg" class="img-fluid" alt="Item name here">
                    </div>
                    <div class="shade">
                        <div class="name">Samsung 75-inch ES9000 smart TV</div>
                        <div class="price">
                            <span class="oldprice">$9,999</span>
                            <span class="newprice">$7000</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./end onsale -->
            <div class="col-12 col-md-7"> 
                <h4 class="sub-title">Today's Hot Deals</h4>
                <div class="hotdeals">
                    <div class="hotdeals_deal">
                        <div class="img">
                        <a href="#"><img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid" alt="Deal Name here"></a>
                        </div>
                        <div class="name"><a href="#">Biyetimi Multifunctional USB Flash Drive 64GB</a></div>
                        <div class="price">US $ 2.62</div>
                        <div class="discount">
                            <span class="discount-bubble">57% off</span>
                        </div>
                    </div>
                    <!-- ./end hotdeals_deal -->
                    <div class="hotdeals_deal">
                        <div class="img">
                            <a href="#"><img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid" alt="Deal Name here"></a>
                        </div>
                        <div class="name"><a href="#">Biyetimi Multifunctional USB Flash Drive 64GB</a></div>
                        <div class="price">US $ 2.62</div>
                        <div class="discount">
                            <span class="discount-bubble">57% off</span>
                        </div>
                    </div>
                    <!-- ./end hotdeals_deal -->
                    <div class="hotdeals_deal">
                        <div class="img">
                        <a href="#"><img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid" alt="Deal Name here"></a>
                        </div>
                        <div class="name"><a href="#">Biyetimi Multifunctional USB Flash Drive 64GB</a></div>
                        <div class="price">US $ 2.62</div>
                        <div class="discount">
                            <span class="discount-bubble">57% off</span>
                        </div>
                    </div>
                    <!-- ./end hotdeals_deal -->
                </div>
                <!-- ./end hotdeals -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="threecates">
            <div class="threecates__cat">
                <a href="#">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/category_1.jpg" class="img-fluid w-100" alt="Category Name as alt">
                    </div>
                    <div class="details">
                        <div class="name">Shoes</div>
                        <div class="item_count">1564</div>
                    </div>
                </a>
            </div>
            <div class="threecates__cat">
                <a href="#">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/category_2.jpg" class="img-fluid w-100" alt="Category Name as alt">
                    </div>
                    <div class="details">
                        <div class="name">Camera</div>
                        <div class="item_count">1564</div>
                    </div>
                </a>
            </div>
            <div class="threecates__cat">
                <a href="#">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/category_3.jpg" class="img-fluid w-100" alt="Category Name as alt">
                    </div>
                    <div class="details">
                        <div class="name">Phone accessories</div>
                        <div class="item_count">1564</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- ./end threecates -->
    </div>

    <div class="container mt-5">
        <div class="tabs">
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="hofashionme-tab" data-toggle="tab" href="#fashion" role="tab" aria-controls="fashion" aria-selected="true">Fashion</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="electronics-tab" data-toggle="tab" href="#electronics" role="tab" aria-controls="electronics" aria-selected="false">Electronics</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="fashion" role="tabpanel" aria-labelledby="fashion-tab">
                    <div class="items_loop">
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="badges">
                                    <span class="badge badge-danger new">New</span>
                                    <span class="badge badge-success onsale">On Sale</span>
                                </div>
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="electronics" role="tabpanel" aria-labelledby="electronics-tab">
                    <div class="items_loop">
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="img">
                                <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                <div class="buttons">
                                    <a href="#" title="Add to cart" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>
                                    <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg></button>
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <div class="ratings">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                                </div>
                                <div class="price">
                                    <div class="oldprice">US $ 5.62</div>
                                    <div class="newprice">US $ 2.62</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./end products tab -->

    <div class="dealBanner bg-primary mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-9">
                    <p class="mb-0 text-uppercase">SAVE UP TO 30% TO 40% OFF</p>
                    <h4 class="mb-0 text-uppercase w700">OMG! JUST LOOK AT THE GREAT DEALS!</h4>
                </div>
                <div class="col-12 col-md-3 text-right">
                    <a href="#" class="btn btn-secondary btn-block">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./end deal banner -->

    <div class="bestSeller mt-5">
        <div class="container">
            <div class="title text-center mb-3">
                <h4 class="w700">Best Seller</h4>
            </div>
            <div class="items_loop">
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
                <div class="single_item">
                    <div class="img">
                        <img src="<?php echo HTTP_PATH ?>img/hotdeal" class="img-fluid w-100" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                        <div class="buttons">
                            <a href="#" class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                            <button class="btn btn-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg></button>
                        </div>
                    </div>
                    <div class="details">
                        <div>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-muted"></i>
                            </div>
                            <div class="name" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><a href="#"><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 0, 20)."..."; ?></a></div>
                        </div>
                        <div class="price">
                            <div class="oldprice">US $ 5.62</div>
                            <div class="newprice">US $ 2.62</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./end main -->


<?php require_once('./includes/footer.inc.php') ?>
