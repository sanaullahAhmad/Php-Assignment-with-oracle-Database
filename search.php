<?php include('common_functions.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 
author name : John sharma  
Date modified: 8/12/2016

reference site to modify styles : 
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/default.asp
            http://www.w3schools.com/html/html_attributes.asp
            http://www.w3schools.com/html/html_elements.asp
            http://www.w3schools.com/html/html_styles.asp
            http://www.w3schools.com/html/html_formatting.

web design for deain
--> 
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Flower Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/autocomplete.js"></script>
    <script src="js/common.js"></script>
    <!--This auto complete.js will check current keyword and will send a get request to autocomplete.php which
    will search in Database. Results will be filled in UL below search box-->
  </head>
  <body>
    <div id="wrap">

      <?php include('header.php');?>


      <div class="center_content">
       	<div class="left_content">
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Search Flowers</div>

          <div class="feat_prod_box_details">
            <p class="details">
              Flowers don�t just mean romance! Choose a classic all-rose bouquet for a loved one, or select a multi-colored mixed bouquet for family, friends � even colleagues! Fragrant roses are always a welcome surprise.
            </p>

            <div class="contact_form">
              <div class="form_subtitle">Enter Flower name or Plant name </div>      

              <!-- simple form --> 
              <!-- 
              initializing the form tags for future use because form will be needed to send data to the server or for Data saving
                by default it will submit to itself
              method post is secure to use and will encode all data before sending over the network
                name attribute is missing from input fields and post / get will get its value from name attribute
              --> 
              <form class="" method="post" action="search.php">
                <div class="form_row" style="position: relative;">
                  <label class="contact"><strong>Search : </strong></label>
                  <input type="text" class="contact_input" name="name" id="keyword" autocomplete="off"/>
                  <ul class="search_suggestions">

                  </ul>
                </div>  
                <div class="form_row">
                  <input type="submit" name="submit" id="submit" value="Search" />                 
                </div>
              </form>
            </div>

            <div class="contact_form">
             <?php
             if(isset($_POST['submit']))
             {
               $query = "select * from products  where  NAME like '%".$_POST['name']."%'";

               $stmt = oci_parse($connect, $query);
               oci_execute($stmt);
               $numrows=oci_fetch_all($stmt, $row_items, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

                 if($numrows>0)
                 {
                   $mynamesarray=array();
                   foreach($row_items as $row )
                   {
                 ?>
               <div class="imgsec">
                 <img src="images/<?php echo $row['PIC']?>">
                 <p> Name : <?php echo $row['NAME']?></p>
                 <p> Price : $<?php echo $row['PRICE']?></p>
                 <p>Category : <?php echo $row['CAT']?></p>
                 <p> Zone : 4</p><p><a href="javascript:void(0)" class="more" onclick="add_to_cart(<?php echo $row['ID']?>)">
                     <img src="images/order_now.gif" alt="" title="" border="0"></a></p>
               </div>
              <?php
                 }
               }
             }
             ?>

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
              <a href="details.php">Graceful Garden</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/graceful-garden.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Clear Bouquet</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/clear-bouquet.jpg" alt="" title="" class="thumb" border="0" /></a>
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