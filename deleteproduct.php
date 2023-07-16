<?php
session_start();
include "connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$id=$_GET["id"];
mysqli_query($link,"DELETE FROM product_detail WHERE  id='$id'");
?>
<script type="text/javascript">
    window.location="nextadmin.php";


</script>