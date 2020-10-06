<?php require_once('top.php') ?>
<?php require_once('./includes/header.inc.php') ?>

<div class="main">
    <div class="single-prodcut">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="single-product_slider">
                        <!--Carousel Wrapper-->
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            </a>
                            <!--/.Controls-->
                            <ol class="carousel-indicators thumbnail">
                                <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/1.jpg" class="img-fluid"></li>
                                <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/2.jpg" class="img-fluid"></li>
                                <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="<?php HTTP_PATH; ?>img/product/3.jpg" class="img-fluid"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="single-product_details">
                        <h4 class="product-title">Product Name here</h4>
                        <div class="price">
                            <div class="newprice">
                                <h4 class="text-primary">Rs. 5,500.00</h4>
                            </div>
                            <span class="oldprice">Rs. 7500.00</span>
                            <span class="discountPrecent">-37%</span>
                        </div>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Size</td>
                                    <td>
                                        <div class="variants">
                                            <div class="variant_item">
                                                <input type="checkbox" name="vari1" id="vari1">
                                                <!-- Can change to type="radio" -->
                                                <label for="vari1">Free Size</label>
                                            </div>
                                            <div class="variant_item">
                                                <input type="checkbox" name="vari2" id="vari2">
                                                <!-- Can change to type="radio" -->
                                                <label for="vari2">Free Size</label>
                                            </div>
                                            <div class="variant_item">
                                                <input type="checkbox" name="vari3" id="vari3">
                                                <!-- Can change to type="radio" -->
                                                <label for="vari3">Free Size</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>
                                        <div class="quntityCalc">
                                            <form action="">
                                                <Button type="button" class="btn btn-secondary" id="minus">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                    </svg>
                                                </Button>
                                                <input id="quantity" class="form-control" />
                                                <Button type="button" class="btn btn-secondary" id="plus">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </Button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="button-set">
                            <button class="btn btn-primary">Buy Now</button>
                            <button class="btn btn-secondary">Add to Cart</button>
                            <button class="btn btn-black"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg> Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-secondary">
                <div class="col-12 py-3">
                    <div class="single-product-description">
                        <h6>Product details of Red and Blue Fashion Printed Indian saree</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <ul>
                            <li>Occasion - Casual</li>
                            <li>Fabric Care - Hand Wash</li>
                            <li>Fabric - Georgette</li>
                            <li>Type - Fashion</li>
                            <li>Blouse Piece - Unstitched</li>
                            <li>Sari Style - Regular Sari</li>
                            <li>Sari Length - 5.25 m</li>
                            <li>Blouse Piece Length - 0.75 m</li>
                            <li>Other Details - Daily Wear Saree, Printed Saree With Unstitched Blouse Piece, 5.25 Meters Saree Length, 0.75 Meters Blouse Piece Length</li>
                        </ul>
                        <h6>Specifications of Red and Blue Fashion Printed Indian saree</h6>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="spec">Brand</span>
                                        <span class="specValue">ABC Fashion</span>
                                    </td>
                                    <td>
                                        <span class="spec">SKU</span>
                                        <span class="specValue">106902179_LK-1014900467</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="spec">What’s in the box</span>
                                        <span class="specValue">Saree with Blouse</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="title text-center mb-3">
                <h4 class="w700">Related Products</h4>
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
            </div>
        </div>
    </div>
    <!-- ./Single product -->
</div>
<!-- ./end main -->


<?php require_once('./includes/footer.inc.php') ?>
<script>
$(function(){
    var defaultQuntity = 1;
    $('#quantity').val(defaultQuntity)
    $('#minus').click(function(){
        if(defaultQuntity == 1){
            $('#quantity').val(defaultQuntity)
        }else{
            defaultQuntity = defaultQuntity - 1;
            $('#quantity').val(defaultQuntity);
        }
    })
    $('#plus').click(function(){
        defaultQuntity = defaultQuntity + 1;
        $('#quantity').val(defaultQuntity);
    })
})
</script>