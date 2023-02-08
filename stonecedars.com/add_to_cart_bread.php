<?php
   // connect to the database
   $conn = mysqli_connect("localhost", "mahmoud", "password", "bakery");
   // retrieve the product ID from the URL query string
   $id = $_GET['id'];
   // retrieve the product details from the relevant table based on the category
   $result = mysqli_query($conn, "SELECT * FROM bread WHERE id = '$id'");
   $row = mysqli_fetch_assoc($result);
   // insert the product into the cart table
   mysqli_query($conn, "INSERT INTO shopping_cart.cart (product_name, price) VALUES ('" . $row['bread_name'] . "', '" . $row['price'] . "')");
   // close the database connection
   mysqli_close($conn);
   // redirect back to the store page
   header("Location: Bread.php");
?>