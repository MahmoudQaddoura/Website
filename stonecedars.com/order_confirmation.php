<?php
   // Connect to the database
   $conn = mysqli_connect("localhost", "mahmoud", "password", "shopping_cart");
   // Retrieve the order details from the orders table
   $result = mysqli_query($conn, "SELECT * FROM orders");
   // Create an array to store the order details
   $orders = array();
   while ($row = mysqli_fetch_assoc($result)) {
      $orders[] = $row;
   }
   // Close the database connection
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The best gourmet artisnal bakery in Amman. serving you elegant breads, Pastries and desserts since 2010"/>
    <link rel="stylesheet" href="design/Cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
   <title>Order Confirmation</title>

   <style>
         /* add styles for the page header */
         h1 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin-top: 50px;
         }
         /* add styles for the order summary table */
         table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
         }
         th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
         }
         th {
            background-color: rgb(38, 38, 38);
         }
         /* add styles for the "Thank You" message */
         p {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            margin-top: 50px;
         }
      </style>

</head>
<body>
   <h1>Order Confirmation</h1>
   <table>
      <tr>
         <th>Product Name</th>
         <th>Price</th>
      </tr>
      <?php foreach ($orders as $order) { ?>
         <tr>
            <td><?php echo $order['product_name']; ?></td>
            <td><?php echo $order['price']; ?></td>
         </tr>
      <?php } ?>
   </table>
</body>
</html>
