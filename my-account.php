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
                        <div class="col-12 col-md-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Personal infomations</h5>
                                    <p>John Doe</p>
                                    <p>johndoe@gmail.com</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Addresses</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-6 border-right border-dark">
                                            <p><strong>John Doe</strong><br>
                                                NO.7, Pitumpe,<br>
                                                Padukka.<br>
                                                +94-91-2225630</p>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <p><strong>John Doe</strong><br>
                                            703 A Prince Of Wales Avenue, 14<br>
                                            Colombo.<br>
                                            (+94) ( 011) 2431991</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Recent Orders</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Placed On</th>
                                                <th>Items</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom border-dark">
                                                <td>202231835900873</td>
                                                <td>27/09/2020</td>
                                                <td>
                                                    <div class="descriptionOrder">
                                                        <img class="order-summery" src="<?php echo HTTP_PATH ?>img/hotdeal" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here"><p>Red and Blue Fashion Printed Indian saree<br><span class="badge bg-dark">Pending</span><p>
                                                    </div>
                                                </td>
                                                <td class="text-right">Rs. 5300.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
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