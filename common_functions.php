<?php
$dbuser = "USERSSHJO"; /* your deakin login */
$dbpass = "gaighat#75"; /* your oracle access password */
$db = "SSID";
$connect = oci_connect($dbuser, $dbpass, $db);
$salt="wwQ4jX7K]wX,%`";//This will be used in Salted md5.
session_start();
//This page include all fucntion and process required in this assignment

//add to cart with ajx on button click
if(isset($_POST['add_to_cart']))
{
    //echo "success";
    $query="select * from products  where  ID='".$_POST['product_id']."'";
    $stmt = oci_parse($connect, $query);
    oci_execute($stmt);
    $row = oci_fetch_array($stmt);
    if($row != false)
    {
        $rowid = $row['ID'];
        if(isset($_SESSION['cart'][$rowid]))
        {
            $qt_value = explode('_',$_SESSION['cart'][$rowid]);
            $increament= $qt_value[1]+1;
            $_SESSION['cart'][$rowid]=$row['ID'].'_'.$increament.'_'.$row['PRICE'].'_'.$row['PIC'].'_'.$row['NAME'];

        }
        else
        {
            $_SESSION['cart'][$rowid]=$row['ID'].'_1_'.$row['PRICE'].'_'.$row['PIC'].'_'.$row['NAME'];
        }


        if($_POST['ajax'] != '1'){
            header('Location:index.php?added=success'); // return to rejester page with Success message.
        }
        else
        {
            $total=0;
            $n=0;
            foreach($_SESSION['cart'] as $cart)
            {
                $qt_value = explode('_',$cart);
                $total+=$qt_value[1]*$qt_value[2];
                $n+=1;
            }
            echo $n.'_'.$total;
            exit;
        }
    }

}

// update account form submission from account.php
if(isset($_POST['update_account']))
{
    $sql = "update users SET
       username ='".urlencode($_POST['username'])."',
       email    ='".$_POST['email']."',
       phone    ='".urlencode($_POST['phone'])."',
       company  ='".urlencode($_POST['company'])."',
       address  ='".urlencode($_POST['address'])."'";

    if($_POST['password']!='')
    {
        $sql.=",password = '".md5($salt . md5($salt . md5($_POST['password'])))."'";
    }
    $sql.=" where id  = '".$_SESSION['id']."'";
    //echo $sql;exit;
    $stmt = oci_parse($connect, $sql);
    oci_execute($stmt);


    header('Location:account.php?message=Account Updated Successfully'); // return to rejester page with Success message.
}

//from submission from order.php
if(isset($_POST['send_order']))
{
    $total=0;
    if(isset($_SESSION['cart'])){
        //get max value
        $max_order = "SELECT NVL(MAX(PR.ID), 0) AS MAX_VAL FROM ORDERS PR";// Get Max id, increament it by one, for Unique value
        $stmt = oci_parse($connect, $max_order);
        oci_execute($stmt);
        $row=oci_fetch_array($stmt);
        $order_id = $row['MAX_VAL']+1;

        //echo "order_id = ".$order_id. "   MAX_VAL = ".$row['MAX_VAL'];exit;

        $sql = "insert into orders (ID, name, email, phone, street, city, area, postal_code, additional_info, c_card_holder, c_card_number, c_card_expiry, c_card_ccv) 
                            values(
                            $order_id, 
                            '".urlencode($_POST['name'])."', 
                            '".urlencode($_POST['email'])."', 
                            '".urlencode($_POST['phone'])."', 
                            '".urlencode($_POST['street'])."', 
                            '".urlencode($_POST['city'])."', 
                            '".urlencode($_POST['area'])."', 
                            '".urlencode($_POST['postal_code'])."', 
                            '".urlencode($_POST['additional_info'])."', 
                            '".urlencode($_POST['c_card_holder'])."', 
                            '".urlencode($_POST['c_card_number'])."', 
                            '".urlencode($_POST['c_card_expiry'])."', 
                            '".urlencode($_POST['c_card_ccv'])."')";
        $stmt = oci_parse($connect, $sql);
        oci_execute($stmt);



        foreach($_SESSION['cart'] as $cart)
        {
            $qt_value = explode('_',$cart);

            $max_ord_pro = "SELECT NVL(MAX(P.ID), 0) AS MAX_VAL FROM orders_products P";// Get Max id, increament it by one, for Unique value
            $stmt = oci_parse($connect, $max_ord_pro);
            oci_execute($stmt);
            $row=oci_fetch_array($stmt);
            $inset_id = $row['MAX_VAL']+1;

            //echo "order_id = ".$inset_id. "   MAX_VAL = ".$row['MAX_VAL'];exit;

            $sql = "insert into orders_products (ID, product_id, order_id, user_id, quantity, price) 
                            values($inset_id, $qt_value[0], '$order_id', '".$_SESSION['id']."', '".$qt_value[1]."', '".$qt_value[2]."')";
            $stmt = oci_parse($connect, $sql);
            oci_execute($stmt);
            $total+=$qt_value[1]*$qt_value[2];//calculate total value from each product price
        }
        $total+=10;


        $sql = "update orders SET total= '$total' where ID = '".$order_id."'";//Now update Total column with total price, inatialy left blank
        $stmt = oci_parse($connect, $sql);
        oci_execute($stmt);

        unset($_SESSION['cart']);
    }
    header('Location:invoice.php?invoice_id='.$order_id); // return to home page.
}

// login form submission from login.php
if(isset($_POST['login']))
{
    //echo "success";exit;

    $query = "select * from USERS where 
              (username='".$_POST['email']."' OR email='".$_POST['email']."') AND 
              password='".md5($salt . md5($salt . md5($_POST['password'])))."'";

    $stmt = oci_parse($connect, $query);
    oci_execute($stmt);
    $row=oci_fetch_array($stmt);
    if($row != false)
    {
        $_SESSION['email']=$row['EMAIL'];
        $_SESSION['id']=$row['ID'];

        //echo $row['id'],exit;
        header('Location:account.php?message=Successfully Loged in'); // return to index page with Success message.
    }
    else{
        header('Location:login.php?message=Incorrect email or password'); // return to rejester page with Success message.
    }
}

// logout link click
if(isset($_GET['logout']))
{
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    session_destroy();
    header('Location:index.php'); // return to home page.
}

//if register button is clicked from register.php
if(isset($_POST['register']))
{
    $max_ord_pro = "SELECT NVL(MAX(P.ID), 0) AS MAX_VAL FROM users P";// Get Max id, increament it by one, for Unique value
    $stmt = oci_parse($connect, $max_ord_pro);
    oci_execute($stmt);
    $row=oci_fetch_array($stmt);
    $insert_id = $row['MAX_VAL']+1;



    $sql = "insert into users (ID, USERNAME, PASSWORD, EMAIL, PHONE, COMPANY, ADDRESS) 
                            values(
                             $insert_id, 
                            '".urlencode($_POST['username'])."', 
                            '".md5($salt . md5($salt . md5($_POST['password'])))."', 
                            '".urlencode($_POST['email'])."', 
                            '".urlencode($_POST['phone'])."', 
                            '".urlencode($_POST['company'])."', 
                            '".urlencode($_POST['address'])."')";
    //echo $sql;exit;
    $stmt = oci_parse($connect, $sql);
    oci_execute($stmt);

    header('Location:login.php?message=Successfully Registered. Login now.'); // return to rejester page with Success message.
}
?>