<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/variables.php';
include $_SERVER["DOCUMENT_ROOT"] . '/admin/parts/header.php';

// кнопка нажата
if (isset($_GET['save'])) {

    $sql = "UPDATE users SET name = '" . $_GET["name"] . "', updated_at = current_timestamp, email = '" . $_GET["email"] . "' WHERE users.id =" . $_GET['id'];
    $result = $conn->query($sql);
    // var_dump(expression)
    // header('Location: http://present.local/admin/pages/users.php');
}
?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Редактирование заказа</h2>
                    <p><a href="/admin/">Главная</a> | <a href="/admin/pages/orders.php">Заказы</a> | Редактирование заказа</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->

<!-- shopping-cart content section start -->
        <div class="shopping-cart-area s-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="s-cart-all">
                            <div class="cart-form table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th class="low1">Product</th>
                                        <th class="low7">Quantity</th>
                                        <th class="low7">Price</th>
                                        <th class="low7">Total</th>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="/img/products/11.jpg"></a>
                                            <a href="#">Vintage Lambskin</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" size="4" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$180.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="/img/products/01.jpg"></a>
                                            <a href="#">Vintage Lambskin</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" size="4" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$79.00 - </span>
                                                <span class="amount2 ana">$100.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="last-check1">
                                <div class="yith-wcwl-share yit">
                                    <p class="checkout-coupon an-cop">
                                        <input type="submit" value="Update Cart">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="second-all-class">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="tb-tab-container2">
                                <ul class="etabs" role="tablist">
                                    <li role="presentation" class="vc_tta-tab active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Estimate Shipping & Taxe</a></li>
                                    <li class="vc_tta-tab " role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Use Coupon Code</a></li>
                                </ul>
                                <div class="tab-content another-cen">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="top-shopping4">
                                            <p class="shop9">Shipping Local Pickup (Free)</p>
                                            <p class="down-shop">Enter your destination to get a shipping estimate</p>
                                        </div>
                                        <form action="#" class="woocommerce-shipping-calculator">
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Country
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    District 
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>mymensingh</option>
                                                    <option>dhaka</option>
                                                    <option>khulna</option>
                                                    <option>kumillah</option>
                                                    <option>chadpur</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Post Code  
                                                    <span class="required">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="name" required="" placeholder="1234567">
                                            </p>
                                            <p class="checkout-coupon two">
                                                <input type="submit" value="Get Quotes">
                                            </p>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="2nd-copun-code">
                                            <form action="#">
                                                <p class="form-row form-row-wide">
                                                    <label>
                                                        Coupon:  
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control again" type="text" name="name" required="" placeholder="Coupon code">
                                                </p>
                                                <p class="checkout-coupon full">
                                                    <input type="submit" value="Apply Coupon">
                                                </p>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="sub-total">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal:</th>
                                            <td>
                                                <span class="amount">$297.00</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">$297.00</span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="#">Continue Shopping</a>
                                </p>
                                <a class="wc-forward" href="#">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping-cart  content section end -->


<?php
include $_SERVER["DOCUMENT_ROOT"] . "/admin/parts/footer.php"
?>