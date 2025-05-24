<?php
require 'fungsi/insert_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="user/logo yamjellyjoy.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAM JELLY JOY</title>
    <link rel="stylesheet" href="user/styles.css">
</head>
<body>
    <div class="container">
        <h1 class="moving-text">Order Now!</h1>
        <img src="user/produk.png" alt="produk">
        <table>
            <tr>
                <td>
                    <!-- Menambahkan atribut action ke dalam tag <form> -->
                    <form action="fungsi/insert_data.php" method="post">
                        <div class="product-details">
                            <h2 class="product-title">Jelly Ball Soup</h2>
                            <p class="product-description">Indulge in the exquisite taste of our jelly balls, crafted with the finest ingredients to tantalize your taste buds. Perfect for every occasion, our jelly balls are a delightful treat for everyone.</p>
                            <div class="price">
                                <h3 class="product-price">Rp. 15.000</h3>
                            </div>
                        </div>

                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                        
                        <!-- New fields -->
                        <label for="customer_name">Customer Name:</label>
                        <input type="text" id="customer_name" name="customer_name">
                        
                        
                        <label for="address">Address:</label>
                        <textarea id="address" name="address"></textarea>
                        
                        <label for="phone_number">Phone Number:</label>
                        <input type="tel" id="phone_number" name="phone_number">
                        
                        <button type="submit" name="submit_order">Add to Cart</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <footer class="dashboard-footer">
        <p>&copy; YAM JELLY JOY | All rights reserved</p>
    </footer>
</body>
</html>
