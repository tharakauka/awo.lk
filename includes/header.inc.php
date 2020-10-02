<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo HTTP_PATH ?>css/main.min.css" />

    <title>AWO.LK</title>
    
</head>
<body>

<header>
    <div class="topBar">
        <div class="mainWrapper">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-sm-12 d-none d-md-block col-md-6">
                        <span>Free Shipping</span>
                        <a href="#">Track Order</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <span class="no-bg-selector languageSelector">
                            <select name="language" id="language">.
                                <option value="0">ENG</option>
                                <option value="1">FRC</option>
                                <option value="2">ITY</option>
                                <option value="3">TML</option>
                            </select>
                        </span>
                        <span class="no-bg-selector currencySelector">
                            <select name="currency" id="currency">.
                                <option value="0">LKR</option>
                                <option value="1">USD</option>
                            </select>
                        </span>
                        <span class="loginWrapper">
                            <input type="checkbox" name="login" id="login" />
                            <label for="login">Hi! John 
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </label>
                            <ul class="accountLinks">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="midBar">
        <div class="mainWrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 order-3 order-md-2 searchWrapper">
                        <div class="input-group mb-3 mb-sm-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="Search product here" aria-label="Search product here" aria-describedby="searchBtn">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="searchBtn">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 order-lg-1 logoWrapper">
                        <a href="#">
                            <img src="<?php echo HTTP_PATH ?>img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="col-6 col-md-3 order-md-2 order-lg-3 cartWrapper text-right">
                        <a href="#" class="wishlist d-none d-md-inline">
                            <svg width="24px" height="24px" viewBox="0 0 16 16" class="bi bi-heart text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg> Wishlist
                        </a>
                        <a href="#" class="cart">
                            <span>
                                <svg width="17.5px" height="17.5px" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                            </span> 1 Item
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottomBar">
        <div class="mainWrapper">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>