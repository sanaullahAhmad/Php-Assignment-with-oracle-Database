<?php include('common_functions.php');
$query = "select name from products  where  NAME like '%".$_GET['keyword']."%'";

$stmt = oci_parse($connect, $query);
oci_execute($stmt);
$numrows=oci_fetch_all($stmt, $row_items, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
$mynamesarray=array();
if($numrows>0)
{
    foreach($row_items as $items )
    {
        array_push($mynamesarray,$items['NAME']);
    }
}
//echo json_encode($mynamesarray);
$n=1;foreach ($mynamesarray as $value){ echo $value; if($n<sizeof($mynamesarray)){ echo ",";} $n++;};
?>
