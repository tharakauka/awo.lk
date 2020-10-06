<?php require_once('top.php') ?>
<?php require_once('./includes/header.inc.php') ?>

<div class="main">
    <div class="checkout-page">
        <div class="container  mb-4">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="bg-secondary px-3 py-3">
                        <div class="addressForm">
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control" placeholder="Address line 1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control" placeholder="Address line 2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input type="tel" class="form-control" placeholder="Zip code">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="sameAddress" name="sameAddress" class="custom-control-input">
                                    <label class="custom-control-label" for="sameAddress">Ship to same address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-secondary px-3 py-3">
                        <h6>Payment method</h6>                        
                        <div class="custom-control custom-radio">
                            <input type="radio" id="paymentMethod1" name="paymentMethod" class="custom-control-input">
                            <label class="custom-control-label" for="paymentMethod1">Credit/Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="paymentMethod2" name="paymentMethod" class="custom-control-input">
                            <label class="custom-control-label" for="paymentMethod2">PayPal</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="paymentMethod3" name="paymentMethod" class="custom-control-input">
                            <label class="custom-control-label" for="paymentMethod3">Cash on delivery</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-secondary px-3 py-3">
                        <div class="summary">
                            <table class="table cart checkout table-sm mb-0">
                                <tbody>
                                    <tr>
                                        <td colspan="2"><img src="<?php echo HTTP_PATH ?>img/hotdeal" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" alt="Item Name here">
                                            <p>Red and Blue Fashion Printed Indian saree</p>
                                            <span class="specs">ABC Fashion, Size: Free Size</span>
                                            
                                            <span>Rs. 5500.00</span>
                                            <span>+</span>
                                            <span>Rs. 150.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-right">Rs. 5650.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Discount</td>
                                        <td class="text-right text-muted">Rs. 350.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="text-right">Rs. 5300.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn mt-3 btn-primary btn-block" type="button" id="button-addon2">Place order</button>
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