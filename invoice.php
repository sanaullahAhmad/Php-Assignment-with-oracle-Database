<?php
include('common_functions.php');
//set inatial value 0
$row['NAME']='';
$row['EMAIL']='';
$row['PHONE']='';
$row['STREET']='';
if(isset($_GET['invoice_id'])) {
  $h = "select * from orders  where  ID='" . $_GET['invoice_id']."'";
  $stmt = oci_parse($connect, $h);
  oci_execute($stmt);
  $row=oci_fetch_array($stmt);
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>A simple, clean, and responsive HTML invoice template</title>

  <style>
    .invoice-box{
      max-width:800px;
      margin:auto;
      padding:30px;
      border:1px solid #eee;
      box-shadow:0 0 10px rgba(0, 0, 0, .15);
      font-size:16px;
      line-height:24px;
      font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color:#555;
    }

    .invoice-box table{
      width:100%;
      line-height:inherit;
      text-align:left;
    }

    .invoice-box table td{
      padding:5px;
      vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
      text-align:right;
    }

    .invoice-box table tr.top table td{
      padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
      font-size:45px;
      line-height:45px;
      color:#333;
    }

    .invoice-box table tr.information table td{
      padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
      background:#eee;
      border-bottom:1px solid #ddd;
      font-weight:bold;
    }

    .invoice-box table tr.details td{
      padding-bottom:20px;
    }

    .invoice-box table tr.item td{
      border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
      border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
      border-top:2px solid #eee;
      font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td{
        width:100%;
        display:block;
        text-align:center;
      }

      .invoice-box table tr.information table td{
        width:100%;
        display:block;
        text-align:center;
      }
    }
  </style>
</head>

<body>
<div class="invoice-box">
  <table cellpadding="0" cellspacing="0">
    <tr class="top">
      <td colspan="4">
        <table>
          <tr>
            <td class="title" >
              <img src="images/logo.gif" style="width:100%; max-width:300px;">
            </td>

            <td>
              Invoice #: <?php echo $_GET['invoice_id']?><br>
              Created: <?php echo date('F d, Y')?><br>
              Due: <?php echo date('F d, Y', strtotime("+7 days"))?>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="information">
      <td colspan="4">
        <table>
          <tr>
            <td >
              Flower Shop, Inc.<br>
              12345 Sunny Road<br>
              Sunnyville, TX 12345
            </td>

            <td>
              <?php echo $row['STREET'] ;?><br>
              <?php echo $row['NAME'];?><br>
              <?php echo $row['EMAIL'];?>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="heading">
      <td colspan="3">
        Payment Method
      </td>

      <td>
        Check #
      </td>
    </tr>

    <tr class="details">
      <td colspan="3">
        Check
      </td>

      <td>
        1000
      </td>
    </tr>

    <tr class="heading">
      <td >
        Item
      </td>
      <td>
        Unit Price
      </td>
      <td style="text-align: right;">
        Quantity
      </td>

      <td style="text-align: right;">
        Price
      </td>
    </tr>
    <?php
$cart_total=0;
    if(isset($_GET['invoice_id'])) {

      $h = "select * from orders_products  where  ORDER_ID='" . $_GET['invoice_id']."'";
        $stmt = oci_parse($connect, $h);
        oci_execute($stmt);
        $numrows=oci_fetch_all($stmt, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

      if ($numrows > 0) {
        //print_r($rows);EXIT;
        //echo 'success';
        foreach($rows as $row_items )
        {
          ?>
          <tr class="item">
            <td>
              <?php
              $product = "select * from products  where  ID='" . $row_items['PRODUCT_ID']."'";
              $stmt = oci_parse($connect, $product);
              oci_execute($stmt);
              $product_res=oci_fetch_array($stmt);

              echo $product_res['NAME']?>
            </td>

            <td>
              $<?php
              echo $row_items['PRICE']?>.00
            </td>
            <td style="text-align: right;">
              <?php
              echo $row_items['QUANTITY']?>
            </td>
            <td style="text-align: right;">
              $<?php
              $cart_total+=$row_items['PRICE']*$row_items['QUANTITY'];
              echo $row_items['PRICE']*$row_items['QUANTITY']?>.00
            </td>
          </tr>
          <?php
        }
      }
    }
    ?>




    <tr class="total">
      <td colspan="3"></td>

      <td>
        subTotal: $<?php echo $cart_total;//total plus shippin price?>.00
      </td>
    </tr>

    <tr class="total">
      <td colspan="3"></td>

      <td>
        Tax: $10.00
      </td>
    </tr>
    <tr class="total">
      <td colspan="3"><button onclick="myFunction()">Print this page</button></td>

      <td>
        Total: $<?php echo $cart_total+10;//total plus shippin price?>.00
      </td>
    </tr>
  </table>
</div>
</body>
</html>
<script>
  function myFunction() {
    window.print();
  }
</script>