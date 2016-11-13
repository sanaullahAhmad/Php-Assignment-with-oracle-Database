<?php include('common_functions.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--  
author name : John sharma  
Date modified: 8/15/2016

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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
      // script applieed form https://www.youtube.com/watch?v=ppzYGd0wi_c
      $(document).ready(function () {
          $.ajax({
              type: "GET", // define the request type 
              url: "products.xml", //file name 
              dataType: "xml", //data type xml defined
              success: xmlParser
          });
      });
      function xmlParser(xml) {
        $(xml).find("plant").each(function(){
          $("#con").append('<div class="imgsec"> <img src="images/' + $(this).find("pic").text() + '"/> <p> Name : '+ $(this).find("name").text() +'</p><p> Price : '+ $(this).find("price").text() +'</p><p>Category : '+ $(this).find("cat").text() +'</p>'+'<p> Zone : '+ $(this).find("zone").text() +'</p><p><a href="javascript:void(0)" style="float: left;" class="more" onclick="add_to_cart('+ $(this).find("id").text() +')"><img src="images/order_now.gif" alt="" title="" border="0"></a></p></div>');
        });
      }


    </script>
  </head>
  <body>
    <div id="wrap">
      <?php include('header.php');?>

      <!-- all flowers and other information is taken from http://www.theflowershop.ae/ for furhter use  --> 
      <div class="center_content">
       	<div class="left_content">
          <?php
          if(isset($_GET['login']) && $_GET['login']=='success')
          {
            ?><div class="alert alert-info">Successfully Loged in</div> <?php //echo $_SESSION['email'];
          }
          ?>
          <?php
          if(isset($_GET['message']))
          {
            ?><div class="alert alert-info"><?php echo $_GET['message']?></div> <?php //echo $_SESSION['email'];
          }
          ?>
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured products</div>

          <div class="feat_prod_box">
            <!-- giving extra class to image for managing width of the content --> 
            <div class="prod_img"><a href="details.php"><img src="images/f-img-1.jpg" alt="" title="" border="0" class="imgcustom" /></a></div>

            <div class="prod_det_box">
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Heavenly Rose Hand-tied</div>
                <p class="details">Sending a a bouquet of beautiful roses says it all. And you can relax in the knowledge that your florist will select the finest, large-headed red and pink roses to create a hand-tied bouquet guaranteed to take their breath away.</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>	


          <div class="feat_prod_box">

            <div class="prod_img"><a href="details.php"><img src="images/f-img-2.jpg" alt="" title="" border="0" class="imgcustom"  /></a></div>

            <div class="prod_det_box">
              <div class="box_top"></div>
              <div class="box_center">
                <div class="prod_title">Majestic Hand-tied</div>
                <p class="details">Showcasing the very best in designer chic, this sophisticated hand-tied bouquet makes an exceptional gift. The intricate roses and fashionable germini in a glorious shade of deepest red are the ideal contrast to the lime green chrysanthemums with their unusual petal shapes.</p>
                <a href="details.php" class="more">- more details -</a>
                <div class="clear"></div>
              </div>

              <div class="box_bottom"></div>
            </div>    
            <div class="clear"></div>
          </div>      



          <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>New products</div> 

          <div class="new_products">

            <div class="new_prod_box">
              <a href="details.php">Heavenly Red Rose</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/f-img-3.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Pink Summer</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/f-img-6.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>                    

            <div class="new_prod_box">
              <a href="details.php">Summer Celebration</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/f-img-4.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>          

          </div>         
          <div class="clear"></div>
        </div><!--end of left content-->

        <div class="right_content">
          <div class="languages_box">
            <span class="red">Languages:</span>
            <a href="#"><img src="images/au.gif" alt="" title="" border="0" height="12px" width="15px"/></a>
          </div>
          <div class="currency">
            <span class="red">Currency: </span>
            <a href="#" class="selected">AUD</a>
          </div>


          <?php
          include('cart_content.php');
          ?>




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
              <a href="details.php">Everlasting Love</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/everlasting-love.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Floral Bouquet</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span><a href="details.php"><img src="images/floral.jpg" alt="" title="" class="thumb" border="0" /></a></div>
            </div>                    
            <!-- commented by Shang 09/07/2013 
            <div class="new_prod_box">
                <a href="details.html">product name</a>
                <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
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
        <!-- xml data container --> 
        <div id="con">
          <h3 class="">Flowers by Flowershop</h3>
        </div>


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
<!-- �Deakin University, School of Information Technology. This web page has been developed as a student assignment for the unit SIT203: Web Programming. Therefore it is not part of the University's authorised web site. DO NOT USE THE INFORMATION CONTAINED ON THIS WEB PAGE IN ANY WAY. --> 