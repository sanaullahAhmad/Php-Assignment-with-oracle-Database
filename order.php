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

web design for deain
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
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Place an Order here</div>

          <div class="feat_prod_box_details">
            <p class="details">
              <!-- here we place some text to ensure client satisfaction wether his/her transactions are secure  --> 
              your payment / transactions are secured by bulletproofsec.com and all data is transfered through ssl tunnel . <br/>
              Don not worry we don't use . store your credit card info on our server they will be processed on third party secure servers <br/>
            </p>
            <!-- simple form --> 
            <form name="myForm" class="" method="post" action="order.php"  onsubmit="return validateOrderForm()">
              <?php



              $row['USERNAME']='';
              $row['EMAIL']='';
              $row['PHONE']='';
              $row['ADDRESS']='';
              if(isset($_SESSION['id'])) {

                $query = "select * from users  where  id='" . $_SESSION['id'] . "'";
                $stmt = oci_parse($connect, $query);
                oci_execute($stmt);
                $row=oci_fetch_array($stmt);
              }
              ?>

              <div class="contact_form" style="width: 407px;">
                <div class="form_subtitle">all fields are required</div>          
                <div class="form_row">
                  <label class="contact" style="width: 100%;text-align: center;"><strong>Customer Info</strong></label>
                </div>  
                <div class="form_row">
                  <label class="contact"><strong>Name:</strong></label>
                  <input type="text" class="contact_input" name="name" value="<?php echo $row['USERNAME']?>"/>
                </div>  

                <div class="form_row">
                  <label class="contact"><strong>Email:</strong></label>
                  <input type="email" class="contact_input" name="email" value="<?php echo $row['EMAIL']?>"/>
                </div>



                <div class="form_row">
                  <label class="contact" style="width: 100%;text-align: center;"><strong>Adress</strong></label>
                </div>  
                <div class="form_row">
                  <label class="contact"><strong>Phone:</strong></label>
                  <input type="tel" class="contact_input" name="phone"  value="<?php echo $row['PHONE']?>"/>
                </div>

                <div class="form_row">
                  <label class="contact"><strong>street:</strong></label>
                  <input type="text" class="contact_input" name="street"  value="<?php echo $row['ADDRESS']?>" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>city:</strong></label>
                  <input type="text" class="contact_input" name="city"/>
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Area:</strong></label>
                  <input type="text" class="contact_input" name="area" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Postal code:</strong></label>
                  <input type="text" class="contact_input" name="postal_code" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Additional:</strong></label>
                  <textarea class="contact_textarea" name="additional_info"></textarea>
                </div>

                <div class="form_row">
                  <label class="contact" style="width: 100%;text-align: center;"><strong>Payment Info</strong></label>
                </div>  
                <div class="form_row">
                  <label class="contact"><strong>c-card holder:</strong></label>
                  <input type="text" class="contact_input" name="c_card_holder"/>
                </div>
                <div class="form_row">
                  <label class="contact"><strong>c-card num:</strong></label>
                  <input type="text" class="contact_input" name="c_card_number" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>c-card expiry:</strong></label>
                  <input type="text" class="contact_input" name="c_card_expiry" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>c-card ccv</strong></label>
                  <input type="text" class="contact_input" name="c_card_ccv"/>
                </div>
                <div class="form_row">
                  <button type="submit" class="contact" name="send_order">send</button>                    </div>
              </div>  
            </form>

          </div>

          <script>
            function validateOrderForm() {
              //alert('success');

              var name                = document.forms["myForm"]["name"].value;
              var email               = document.forms["myForm"]["email"].value;
              var phone               = document.forms["myForm"]["phone"].value;
              var street              = document.forms["myForm"]["street"].value;
              var city                = document.forms["myForm"]["city"].value;
              var area                = document.forms["myForm"]["area"].value;
              var postal_code         = document.forms["myForm"]["postal_code"].value;
              var additional_info     = document.forms["myForm"]["additional_info"].value;
              var c_card_holder       = document.forms["myForm"]["c_card_holder"].value;
              var c_card_number       = document.forms["myForm"]["c_card_number"].value;
              var c_card_ccv          = document.forms["myForm"]["c_card_ccv"].value;
              var name                = document.forms["myForm"]["name"].value;
              if (name == null || name == "") {
                alert("Name must be filled out");
                return false;
              }
              if (email == null || email == "") {
                alert("email must be filled out");
                return false;
              }
              if (phone == null || phone == "") {
                alert("phone must be filled out");
                return false;
              }
              if (street == null || street == "") {
                alert("street must be filled out");
                return false;
              }
              if (city == null || city == "") {
                alert("city must be filled out");
                return false;
              }
              if (area == null || area == "") {
                alert("area must be filled out");
                return false;
              }
              if (postal_code == null || postal_code == "") {
                alert("postal code must be filled out");
                return false;
              }
              if (additional_info == null || additional_info == "") {
                alert("additional info must be filled out");
                return false;
              }
              if (c_card_holder == null || c_card_holder == "") {
                alert("c card holder must be filled out");
                return false;
              }
              if (c_card_number == null || c_card_number == "") {
                alert("c card number must be filled out");
                return false;
              }
              if (c_card_ccv == null || c_card_ccv == "") {
                alert("c card ccv must be filled out");
                return false;
              }

            }
          </script>

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
              <a href="details.php">Moondance Bouquet</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/moondance-bouquet.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Sunshine Bouquet</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/sunshine-bouquet.jpg" alt="" title="" class="thumb" border="0" /></a>
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