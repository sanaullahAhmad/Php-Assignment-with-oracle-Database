<?php
function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
//echo " ".curPageName();
?>
<div class="header">
    <div class="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    <div id="menu">
        <ul>
            <li <?php if(curPageName()=='index.php'){?> class="selected" <?php }?>><a href="index.php" >home </a></li>
            <li <?php if(curPageName()=='about.php'){?> class="selected" <?php }?>><a href="about.php" >about us</a></li>
            <li <?php if(curPageName()=='category.php'){?> class="selected" <?php }?>><a href="category.php" >flowers</a></li>
            <li <?php if(curPageName()=='specials.php'){?> class="selected" <?php }?>><a href="specials.php" >specials gifts</a></li>
            <li <?php if(curPageName()=='account.php'){?> class="selected" <?php }?>><a href="account.php" >my accout</a></li>
            <li <?php if(curPageName()=='register.php'){?> class="selected" <?php }?>><a href="register.php" >register</a></li>

            <?php if(isset($_SESSION['id'])){?>
                <li><a href="index.php?logout">logout</a></li>
            <?php } else {?>
                <li <?php if(curPageName()=='login.php'){?> class="selected" <?php }?>><a href="login.php" >login</a></li>
            <?php }?>


            <li <?php if(curPageName()=='search.php'){?> class="selected" <?php }?>><a href="search.php" >search</a></li>
            <li <?php if(curPageName()=='order.php'){?> class="selected" <?php }?>><a href="order.php" >Order</a></li>
            <li <?php if(curPageName()=='contact.php'){?> class="selected" <?php }?>><a href="contact.php" >contact</a></li>
        </ul>
    </div>


</div>
