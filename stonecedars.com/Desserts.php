<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/Products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <title>Desserts</title>
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

  <div class="card-container">
  <?php
  // connect to the database
  $conn = mysqli_connect("localhost", "mahmoud", "password", "bakery");
  // retrieve the products from the products table
  $result = mysqli_query($conn, "SELECT * FROM desserts");
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card">';
    echo '<img src="pics/' . strtolower($row["dessert_name"]) . '.jpg" alt="' . $row["dessert_name"] . '">';
    echo '<h2>' . $row["dessert_name"] . '</h2>';
    echo '<p>$' . $row["price"] . '</p>';
    echo '<button onclick="window.location.href=\'add_to_cart_desserts.php?id=' . $row['id'] . '\'">Add to Cart</button>';
    echo '</div>';
  }
  // close the database connection
  mysqli_close($conn);
  ?>
</div>

  <div class="footer">
    <footer>
      <p>Phone: +962 6 521 4288</p>
        <p>E-mail: contact@stonecedars.com</p>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4584.5272993873095!2d35.86328166585076!3d31.95344787762057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1672296011274!5m2!1sen!2sjo" 
        height="200" width="200" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --> 
    </footer>
          
</body>
</html>