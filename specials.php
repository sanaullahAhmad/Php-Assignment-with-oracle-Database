<?php include('common_functions.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 
author name : John sharma  
Date modified: 8/11/2016

reference site to modify styles : 
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/html_attributes.asp
            http://www.w3schools.com/html/html_elements.asp
            http://www.w3schools.com/html/html_styles.asp
            http://www.w3schools.com/html/html_formatting.asp
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

          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Special gifts</div>

          <div class="feat_prod_box">

            <div class="prod_img"><a href="details.php"><img src="images/C6-4863_330x370_deluxe.jpg" alt="" title="" border="0" /></a></div>

            <div class="prod_det_box">
              <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Light of My Life Bouquet</div>
                <p class="details">The Light of My Life Bouquet by Flowershop offers your special recipient fresh vibrant color to brighten their day! Orange Asiatic Lilies, fuchsia carnations, red Peruvian Lilies, lavender chrysanthemums and lush greens are perfectly arranged in a clear glass</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>	


          <div class="feat_prod_box">

            <div class="prod_img"><a href="details.php"><img src="images/imgg-4.jpg" alt="" title="" border="0" /></a></div>

            <div class="prod_det_box">
              <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Presence of Pink Mixed Bouquet</div>
                <p class="details">The In the Presence of Pink Mixed Bouquet offers a way to express your sentiments to friends, family and loved ones with its display of beautiful blushing blooms. Our finest LA Hybrid Lilies unfold their pink petals amid a bed of white daisies and lush greens. Presented with a clear glass vase, this mixed bouquet will make the perfect birthday,</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>



          <div class="feat_prod_box">

            <div class="prod_img"><a href="details.php"><img src="images/imgg-3.jpg" alt="" title="" border="0" /></a></div>

            <div class="prod_det_box">
              <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Look of Love Bouquet</div>
                <p class="details">Her friends will be envious when they see her spectacular gift of fragrant roses and lilies in this magnificent hand-blown art-glass vase etched with an exquisite �rosebud� design. She�ll appreciate you even more. The romantic bouquet includes red roses and white lilies accented with salal and spiral eucalyptus.</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>	


          <div class="feat_prod_box">

            <div class="prod_img"><a href="details.php"><img src="images/imgg-5.jpg" alt="" title="" border="0" /></a></div>

            <div class="prod_det_box">
              <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Lavender Mixed Flower</div>
                <p class="details">The Lavender Mixed Flower Bouquet speaks to the magic and beauty of that perfect evening with those we love and care about. Gorgeous lavender roses and mini carnations are highlighted by clean white star-shaped Asiatic Lily blooms</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>            

          <div class="pagination">
            <span class="disabled"><<</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>�<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
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
              <a href="details.php">Paradise Found</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/paradise-found.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">White Lilies</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/white-lilies.jpg" alt="" title="" class="thumb" border="0" /></a>
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