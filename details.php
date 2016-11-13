<?php include('common_functions.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--  
author name : John sharma  
Date modified: 8/13/2016

reference site to modify styles : 
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/html_attributes.asp
            http://www.w3schools.com/html/html_elements.asp
            http://www.w3schools.com/html/html_styles.asp
            http://www.w3schools.com/html/html_formatting.
--> 

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Flower Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />

    <script src="js/prototype.js" type="text/javascript"></script>
    <script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
    <script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
  </head>
  <body>
    <div id="wrap">

      <?php include('header.php');?>


      <div class="center_content">
       	<div class="left_content">
          <div class="crumb_nav">
            <a href="index.php">home</a> &gt;&gt; product name
          </div>
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Heavenly Rose Hand-tied</div>

          <div class="feat_prod_box_details">

            <div class="prod_img"><a href="details.php"><img src="images/f-img-1.jpg" alt="" title="" border="0" /></a>
              <br /><br />
              <a href="images/big_pic.jpg" rel="lightbox"><img src="images/zoom.gif" alt="" title="" border="0" /></a>
            </div>

            <div class="prod_det_box">
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Details</div>
                <p class="details">Whether it's congratulations or condolences, our overseas flower delivery service will be there when you can't. Local FTD florists turn fresh blooms into elegant arrangements. <br /> Then they deliver to locations right across the country -from homes to hospital wards. 
                </p>
                <div class="price"><strong>PRICE:</strong> <span class="red">100 $</span></div>
                <div class="price"><strong>COLORS:</strong> 
                  <span class="colors"><img src="images/color1.gif" alt="" title="" border="0" /></span>
                  <span class="colors"><img src="images/color2.gif" alt="" title="" border="0" /></span>
                  <span class="colors"><img src="images/color3.gif" alt="" title="" border="0" /></span>                    </div>
                <a href="details.php" class="more"><img src="images/order_now.gif" alt="" title="" border="0" /></a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>	


          <div id="demo" class="demolayout">

            <ul id="demo-nav" class="demolayout">
              <li><a class="active" href="#tab1">More details</a></li>
              <li><a class="" href="#tab2">Related Products</a></li>
            </ul>

            <div class="tabs-container">

              <div style="display: block;" class="tab" id="tab1">
                <p class="more_details">Sending a a bouquet of beautiful roses says it all. And you can relax in the knowledge that your flowershop florist will select the finest, large-headed red and pink roses to create a hand-tied bouquet guaranteed to take their breath away. Featuring a mixture of large-headed red and pink roses hand-tied with eucaluptus and salal leaves, and finished with gift wrap and ribbon. Depending on availability, components such as Ribbon color and design, may vary.
                </p>

                <p class="more_details" >

                  Description
                  Shipping Information
                  If ordered before 7pm, the item can be delivered on the same day to Dubai, Sharjah & Ajman UAE and ordered before 1pm for Abu Dhabi same day delivery. For orders placed thereafter, orders can be delivered next-day. All orders are delivered via theFlowerShop.ae's temperature-controlled delivery vans. Freshness of theFlowerShop.ae's exquisite flowers and gourmet gifts is always guaranteed!<br/>

                  Cities
                  This item can be delivered in the United Arab Emirates to Dubai, Abu Dhabi, Sharjah and Ajman. For more information on shipping, please visit the Shipping section or simply call between 8am and 12am and a customer care representative will be able to assist you. For complete shipping information, click here: <a href="#">Shipping FAQs >></a>
                </p>                           
              </div>	

              <div style="display: none;" class="tab" id="tab2">
                <div class="new_prod_box">
                  <a href="details.php">Heavenly Rose</a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/f-img-1.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>

                <div class="new_prod_box">
                  <a href="details.php">Majestic Hand</a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/f-img-2.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>                    

                <div class="new_prod_box">
                  <a href="details.php">Summer Celebration</a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/f-img-4.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>    

                <div class="new_prod_box">
                  <a href="details.php">Lavender Mixed Flower</a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/imgg-3.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>

                <div class="new_prod_box">
                  <a href="details.php">Look of Love Bouquet</a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/imgg-4.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>                    

                <div class="new_prod_box">
                  <a href="details.php">Presence of Pink Mixed </a>
                  <div class="new_prod_bg">
                    <a href="details.php"><img src="images/imgg-5.jpg" alt="" title="" class="thumb" border="0" /></a>
                  </div>           
                </div>  



                <div class="clear"></div>
              </div>	

            </div>


          </div>



          <div class="clear"></div>
        </div><!--end of left content-->

        <div class="right_content">

          <div class="languages_box">
            <span class="red">Languages:</span>
            <a href="#"><img src="images/au.gif" alt="" title="" border="0" height="12px" width="15px"/></a>
            <!-- commented by Shang 09/07/2013 
            <a href="#" class="selected"><img src="images/gb.gif" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/de.gif" alt="" title="" border="0" /></a> -->
          </div>
          <div class="currency">
            <span class="red">Currency: </span>
            <!-- commented by shang 09/07/2013 
            <a href="#">GBP</a>
            <a href="#">EUR</a> -->
            <a href="#" class="selected">AUD</a>
          </div>

          <?php           include('cart_content.php');           ?>

          <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>About Our Shop</div> 
          <div class="about">
            <p>
              <img src="images/about.gif" alt="" title="" class="right" />
              Flowershop has quickly become renowned as one of Geelong's most prestigious and luxurious retail flower stores, and this has been successfully translated to our online flower shop. The same service, quality and range we provide to our retail shoppers is also extended to our online community. <!-- reference: Flower Temple, availalbe at <http://www.flowertemple.com.au/aboutflowertemple.aspx>, accessed 09/07/2013)-->  
            </p>

          </div>

          <div class="right_box">

            <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Promotions</div> 
            <div class="new_prod_box">
              <a href="details.php">Lily Topiary</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/lily-topiary.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">White Callas</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/white-callas.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>                    

            <!-- commented by Shang 09/07/2013 
            <div class="new_prod_box">
                <a href="details.php">product name</a>
                <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                </div>           
            </div> -->              

          </div>

          <div class="right_box">

            <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title="" /></span>Categories</div> 

            <ul class="list">
              <li><a href="#">accesories</a></li>
              <li><a href="#">flower gifts</a></li>
              <li><a href="#">specials</a></li>
              <li><a href="#">hollidays gifts</a></li>
              <li><a href="#">accesories</a></li>
              <li><a href="#">flower gifts</a></li>
              <li><a href="#">specials</a></li>
              <li><a href="#">hollidays gifts</a></li>
              <li><a href="#">accesories</a></li>
              <li><a href="#">flower gifts</a></li>
              <li><a href="#">specials</a></li>                                              
            </ul>

            <!-- commented by Shang 09/07/2013 
            <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Partners</div> 
            
            <ul class="list">
            <li><a href="#">accesories</a></li>
            <li><a href="#">flower gifts</a></li>
            <li><a href="#">specials</a></li>
            <li><a href="#">hollidays gifts</a></li>
            <li><a href="#">accesories</a></li>
            <li><a href="#">flower gifts</a></li>
            <li><a href="#">specials</a></li>
            <li><a href="#">hollidays gifts</a></li>
            <li><a href="#">accesories</a></li>                              
            </ul>  -->     

          </div>         


        </div><!--end of right content-->




        <div class="clear"></div>
      </div><!--end of center content-->


      <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
        <div class="right_footer">
          <a href="#">home</a>
          <a href="#">about us</a>
          <a href="#">flowers</a>
          <a href="#">privacy policy</a>
          <a href="#">contact us</a>

        </div>
        <div class="footerdiv">
          <p>�Deakin University, School of Information Technology. This web page has been developed as a student assignment for the unit SIT203: Web Programming. Therefore it is not part of the University's authorised web site. DO NOT USE THE INFORMATION CONTAINED ON THIS WEB PAGE IN ANY WAY</p>
        </div>

      </div>


    </div>

  </body>
  <script type="text/javascript">

    var tabber1 = new Yetii({
        id: 'demo'
    });

  </script>
</html>