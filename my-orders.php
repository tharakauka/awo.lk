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