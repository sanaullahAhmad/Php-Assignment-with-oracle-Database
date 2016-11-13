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

  </head>
  <body>
    <div id="wrap">

      <?php include('header.php');?>


      <div class="center_content">
       	<div class="left_content">
          <div class="crumb_nav">
            <a href="index.php">home</a> &gt;&gt; category name
          </div>
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Category products</div>

          <div class="new_products">

            <div class="new_prod_box">
              <a href="details.php">Heartstrings Bouquet</a>
              <div class="new_prod_bg">
                <a href="details.php"><img src="images/key-flower.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Pretty Pink Present</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/pretty-pink-present.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>                    

            <div class="new_prod_box">
              <a href="details.php">Sunny Present</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/sunny-present.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>          


            <div class="new_prod_box">
              <a href="details.php">Lavender Bouquet</a>
              <div class="new_prod_bg">
                <a href="details.php"><img src="images/lavender-bouquet.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">White Hand-tied</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/white-hand-tied.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>                    

            <div class="new_prod_box">
              <a href="details.php">Pink Rose and Lily</a>
              <div class="new_prod_bg">

                <a href="details.php"><img src="images/pink-rose-lily.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div> 

            <div class="new_prod_box">
              <a href="details.php">Orchid, Lily and Rose</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/orchid-lily-and-rose.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div> 

            <div class="new_prod_box">
              <a href="details.php">Sweet Emotions Flower</a>
              <div class="new_prod_bg">
                <a href="details.php"><img src="images/sweet-emotions.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Daisies and Sunbeams</a>
              <div class="new_prod_bg">
                <a href="details.php"><img src="images/daisies-and-sunbeams.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Summer Bouquet</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/summer-sernide-bouquet.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>
            <div class="new_prod_box">
              <a href="details.php">Reflections of Love</a>
              <div class="new_prod_bg">
                <a href="details.php"><img src="images/reflections.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>                  


            <div class="pagination">
              <span class="disabled"><<</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>�<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
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
              <a href="details.php">Perfectly Pastel</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/deluxe.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Imagination Blooms</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/imagination-blooms.jpg" alt="" title="" class="thumb" border="0" /></a>
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
</html>