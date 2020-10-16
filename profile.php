<?php require_once('top.php') ?>
<?php require_once('./includes/header.inc.php') ?>

<div class="main">
    <div class="cart-page">
        <div class="container  mb-4">
            <div class="row">
                <div class="col-12 col-md-3">
                    <nav class="side-bar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">My Account</a>
                                <ul class="nav sub-nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Addresses</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wishlist</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row profile">
                                        <div class="col-12 col-md-4 mb-4">
                                            <label>Full Name</label>
                                            <p>John Doe</p>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <label>Email Address</label>
                                            <p>johndoe@gmail.com</p>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <label>Mobile Number</label>
                                            <p>0718965325</p>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <label>Birthday</label>
                                            <p>1986/05/14</p>
                                        </div>
                                        <div class="col-12 col-md-4 mb-4">
                                            <label>Gender</label>
                                            <p>Male</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <button class="btn btn-primary btn-block">Edit Profile</button>
                                            <button class="btn btn-primary btn-block mt-3">Change Password</button>
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