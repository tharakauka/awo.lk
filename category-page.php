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
                    <div class="category-products mb-4">
                        <h2 class="sub-title mb-4">Category Name here</h2>
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
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- ./end category products -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./end main wrapper -->


</div>
<!-- ./end main -->


<?php require_once('./includes/footer.inc.php') ?>
