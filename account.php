<?php include('common_functions.php');?>
<?php if(isset($_SESSION['id'])){?>
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
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Account</div>

          <div class="feat_prod_box_details">
            <p class="details">
              My Account
            </p>

            <div class="contact_form">
              <?php
              if(isset($_GET['message']))
              {
                ?><div class="alert alert-info"><?php echo $_GET['message']?></div> <?php
              }
              ?>
              <div class="form_subtitle">Account Details</div>
              <?php
              $row['USERNAME']='';
              $row['EMAIL']='';
              $row['PHONE']='';
              $row['ADDRESS']='';
              if(isset($_SESSION['id'])) {

                $query="select * from users  where  id='" . $_SESSION['id'] . "'";//check this username and password
                $stmt = oci_parse($connect, $query);
                oci_execute($stmt);
                $row=oci_fetch_array($stmt);

              }
              ?>
              <form name="register" action="common_functions.php" method="post"  onsubmit="return validateForm()">
                <div class="form_row">
                  <label class="contact"><strong>Username:</strong></label>
                  <input type="text" class="contact_input" name="username"  value="<?php echo urldecode($row['USERNAME']);?>"/>
                </div>  


                <div class="form_row">
                  <label class="contact"><strong>Password:</strong></label>
                  <input type="password" class="contact_input" name="password"  />
                </div> 

                <div class="form_row">
                  <label class="contact"><strong>Email:</strong></label>
                  <input type="email" class="contact_input" name="email"  value="<?php echo $row['EMAIL']?>"/>
                </div>


                <div class="form_row">
                  <label class="contact"><strong>Phone:</strong></label>
                  <input type="text" class="contact_input" name="phone"  value="<?php echo urldecode($row['PHONE'])?>"/>
                </div>

                <div class="form_row">
                  <label class="contact"><strong>Company:</strong></label>
                  <input type="text" class="contact_input" name="company"  value="<?php echo urldecode($row['COMPANY'])?>"/>
                </div>

                <div class="form_row">
                  <label class="contact"><strong>Adrres:</strong></label>
                  <input type="text" class="contact_input" name="address"  value="<?php echo urldecode($row['ADDRESS'])?>"/>
                </div>                    



                <div class="form_row">
                  <input type="submit" class="register" name="update_account" value="Update" />
                </div>   
              </form>     
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
              <a href="details.php">Sunny Smiles</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/sunny-smiles.jpg" alt="" title="" class="thumb" border="0" /></a>
              </div>           
            </div>

            <div class="new_prod_box">
              <a href="details.php">Enchanted Evening</a>
              <div class="new_prod_bg">
                <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                <a href="details.php"><img src="images/enchanted-evening.jpg" alt="" title="" class="thumb" border="0" /></a>
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
<script>
  function validateForm() {
    var username = document.forms["register"]["username"].value;
    var email    = document.forms["register"]["email"].value;
    var phone    = document.forms["register"]["phone"].value;
    var company  = document.forms["register"]["company"].value;
    var address  = document.forms["register"]["address"].value;

    if (username == null || username == "") {
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
    if (company == null || company == "") {
      alert("company must be filled out");
      return false;
    }
    if (address == null || address == "") {
      alert("address must be filled out");
      return false;
    }

  }
</script>
<?php } else {

  header('Location:index.php?message=Please login first'); // return to rejester page with Success message.
}?>