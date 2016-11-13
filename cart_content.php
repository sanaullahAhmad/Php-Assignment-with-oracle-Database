<div class="cart">
    <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div>
    <div class="home_cart_content">
        <?php
        $total=0;
        $n=0;
        if(isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cart) {
                $qt_value = explode('_',$cart);
                $total += $qt_value[2] * $qt_value[1];
                $n += 1;
            }
        }
        ?>
        <span id="item_count"><?php echo $n;?></span> x items | <span class="red">TOTAL: <span id="item_total"><?php echo $total;?></span>$</span>
    </div>
    <a href="cart.php" class="view_cart">view cart</a>

</div>