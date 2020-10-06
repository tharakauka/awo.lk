<?php require_once('top.php') ?>
<?php require_once('./includes/header.inc.php') ?>

<div class="main">
    <div class="cart-page">
        <div class="container  mb-4">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="bg-secondary px-3 py-3">
                        <table class="table cart">
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo HTTP_PATH ?>img/hotdeal" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here"></td>
                                    <td>
                                        <p>Red and Blue Fashion Printed Indian saree</p>
                                        <span class="specs">ABC Fashion, Size: Free Size</span>
                                        <span class="specs items-left">Only 4 item(s) in stock</span>
                                    </td>
                                    <td>
                                        <span class="newPrice">Rs. 5500.00</span>
                                        <span class="oldPrice">Rs. 7500.00</span>
                                        <span class="discount">37%</span>
                                        <button class="btn btn-link px-0 mr-3"><svg width="21px" height="21px" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                        </svg></button>
                                        <button class="btn btn-link px-0 mr-3"><svg width="21px" height="21px" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg></button>
                                    </td>
                                    <td class="text-right">
                                        <div class="quntityCalc">
                                            <form action="">
                                                <Button type="button" class="btn btn-sm btn-secondary" id="minus">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                    </svg>
                                                </Button>
                                                <input id="quantity" class="form-control form-control-sm" />
                                                <Button type="button" class="btn btn-sm btn-secondary" id="plus">
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
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-secondary px-3 py-3">
                        <div class="summary">
                            <h6>Order Summary</h6>
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>Subtotal (1 items)</td>
                                        <td class="text-right">Rs. 5500.00</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Fee</td>
                                        <td class="text-right">Rs. 150.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter voucher code" aria-label="Enter voucher code" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" id="button-addon2">Apply</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-primary btn-block" type="button" id="button-addon2">Proceed to checkout</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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