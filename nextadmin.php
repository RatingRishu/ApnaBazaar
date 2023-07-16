<!doctype html>
<html class="no" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Apna Bazaar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;


        }

        .wholepage {}

        .totalform {
            position: absolute;
            margin-top: 200px;
            left: 30%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 0px 10px whitesmoke;
        }

        .center {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid silver;
        }

        .login {
            font-size: 20px;
            margin-top: 20px;

        }

        .form {
            padding-bottom: 20px;
            margin: 0 20px;
            text-align: center;

        }

        .form-body {
            width: 100%;
            height: 100px;
            font-size: 18px;

            border-radius: 5px;
            box-sizing: border-box;
            padding-left: 10px;
            margin: 7px 0;
        }

        .form1 {
            margin-top: 10px;
        }

        .form2 {
            margin-top: 5px;
        }

        .btn {
            margin-top: 5px;
            width: 90%;
            height: 30px;
            background-color: green;
            border-radius: 5px;
            font-size: 20px;
            margin: 7px 0;
            color: white;
            border: 0;
            cursor: pointer;
        }

        .btn:hover {
            background-color: rgb(160, 160, 239);
        }

        .cardtotal {
            margin-top: 90px;
            margin-left: 60%;
            background-color: white;
            border-radius: 5px;
            position: absolute;
            width: 400px;
            box-shadow: 0px 0px 0px 10px whitesmoke;
        }

        .cardtotal .card {
            color: red;
            text-align: center;

        }
    </style>



    <?php
    session_start();

    include "connection.php";



    ?>
    <div class="wholepage">

        <div class="logout" style="margin: 20px;">
            <a class="btn btn-primary" href="logout.php"
                style="background-color: red;padding:15px 30px; text-decoration: none;">Logout</a>
        </div>
        <div class="totalform">
            <div class="center">
                <div class="login">
                    <h3> Add Product</h3>

                </div>


                <div class="form">
                    <div class="form-body">
                        <form action="" enctype="multipart/form-data" name="form1" method="POST">
                            <div class="form1">
                                <label class="control-label" for="addexam">Product Name</label>
                                <input type="text" id="company" required="" value="" name="productname"
                                    class="form-control">
                            </div>
                            
                            <div class="form2">
                                <label class="control-label" for="time">MRP</label>
                                <input type="text" required="" value="" name="mrp" id="vat" class="form-control">

                            </div>
                            <div class="form2">
                                <label class="control-label" for="time">Price</label>
                                <input type="text" required="" value="" name="price" id="vat" class="form-control">
                                

                            </div>

                            <div class="form2">
                                <label class="control-label" for="time">Image</label>
                                <input type="file" required="" value="" name="img" class="form-control">

                            </div>




                            <button type="submit" name="submit" class="btn">Add</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="cardtotal">
            <div class="card">
                <strong class="card-title">Product Details</strong>
            </div>
            <br>
            <tr>
                <table border="1" cellspacing="5" width="100%">
                    <th width="10%" style='background-color:blue;color:white'>Serial no.</th>
                    <th width="5%" style='background-color:blue;color:white'>Name</th>
                    <th width="5%" style='background-color:blue;color:white'>Mrp</th>
                    <th width="5%" style='background-color:blue;color:white'>Price</th>
                    <th width="5%" style='background-color:blue;color:white'>Image</th>
                    <th width="5%" style='background-color:blue;color:white'>Edit</th>
                    <th width="5%" style='background-color:blue;color:white'>Delete</th>
            </tr>
        </div>



        <?php
        $count = 0;
        $res = mysqli_query($link, "SELECT * FROM product_detail");
        while ($row = mysqli_fetch_array($res)) {
            $count = $count + 1;
            ?>
            <tr>
                <th scope="row">
                    <?php echo $count; ?>
                </th>
                <td>
                    <?php echo $row["product"]; ?>
                </td>
                <td>
                    <?php echo $row["price"]; ?>
                </td>
                <td>
                    <?php echo $row["mrp"]; ?>
                </td>
                <td>
                    <?php echo $row["img"]; ?>
                </td>
                <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</td>
                <td> <a href="deleteproduct.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </div>
    <!-- <?php
    // if (isset($_POST["submit"])) {
    //     mysqli_query($link, "INSERT INTO product_detail VALUES(NULL,'$_POST[productname]','$_POST[price]','$_POST[img]')") or die(mysqli_error($link));
    ?>

        <script type="text/javascript">

            alert("Product  added sucessfully");

        </script>

        <?php ?>
     }-->


    <?php


    include('connection.php');
    // If upload button is clicked ...
    if (isset($_POST['submit'])) {

        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $mrp = $_POST['mrp'];
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];
        $folder = "./product_img/" . $filename;


        // Get all the submitted data from the form
        $sql = "INSERT INTO product_detail (id, product, price,mrp, img) VALUES ('', '$productname','$price','$mrp','$filename')";



        // Execute query
        mysqli_query($link, $sql);


        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo '<script language="javascript" type="text/javascript"> 
               alert("Data Successfully Inserted");window.location = "nextadmin.php";</script>';
        } else {
            echo '<script language="javascript" type="text/javascript"> 
               alert("Data Unsuccessfully");window.location = "nextadmin.php";</script>';
        }
    }
    ?>