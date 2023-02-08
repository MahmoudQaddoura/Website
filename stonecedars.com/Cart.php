<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The best gourmet artisnal bakery in Amman. serving you elegant breads, Pastries and desserts since 2010"/>
    <link rel="stylesheet" href="design/Cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <title>StoneCedars Bakery</title>
</head>

<body>

    <div class="topnav">
        
        <div class="logo">
          <a href="Index.html"><img src="pics/Logo.png" id="logo" style="width: 120px;"></a>
        </div>
        <div class="navbutton">
            <a href="Bread.php">Bread</a>
            <a href="Pastries.php">Pastries</a>
            <a href="Desserts.php">Desserts</a>
            <a href="Cart.php"><img src="pics/outline_shopping_cart_white_24dp.png" style="width: 20px;"></a>
        </div>
    </div>

    <h1>Shopping Cart</h1>
<table>
  <tr>
    <th>Product Name</th>
    <th>Price</th>
  </tr>
  <?php
  $total_cost = 0;
  // connect to the database
  $conn = mysqli_connect("localhost", "mahmoud", "password", "shopping_cart");
  // retrieve the items from the cart table
  $result = mysqli_query($conn, "SELECT * FROM cart");
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
    $total_cost += $row['price'];
  }
  // close the database connection
  mysqli_close($conn);
  ?>
  <tr>
    <td>Total Cost:</td>
    <td><?php echo $total_cost; ?></td>
  </tr>
</table>

   </table>
<form action="checkout.php" method="post">
   <input type="hidden" name="checkout" value="true">
   <input type="submit" value="checkout">
</form>

<?php
   if (isset($_POST['checkout'])) {
      // connect to the database
      $conn = mysqli_connect("localhost", "mahmoud", "password", "shopping_cart");
      // retrieve the cart items
      $result = mysqli_query($conn, "SELECT * FROM cart");
      while ($row = mysqli_fetch_assoc($result)) {
         // insert each item into the orders table
         mysqli_query($conn, "INSERT INTO orders (product_name, price) VALUES ('" . $row['product_name'] . "', '" . $row['price'] . "')");
      }
      // clear the cart
      mysqli_query($conn, "DELETE FROM cart");
      // close the database connection
      mysqli_close($conn);
      // redirect to the order confirmation page
      header("Location: order_confirmation.php");
   }
?>

<div class="footer">
    <footer>
        <p>Phone: +962 6 521 4288</p>
        <p>E-mail: contact@stonecedars.com</p>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4584.5272993873095!2d35.86328166585076!3d31.95344787762057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1672296011274!5m2!1sen!2sjo" 
        height="200" width="200" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --> 
    </footer>

</div>

</body>
</html>