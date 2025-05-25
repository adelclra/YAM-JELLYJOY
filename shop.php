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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="user/styles.css">
</head>
<body>
    <div class="page-wrapper">
        <a href="index.php" class="back-button"><i class="ri-arrow-left-line"></i></a>
        
        <!-- Order Now di atas container -->
        <div class="header-section">
            <h1 class="moving-text">Order Now!</h1>
        </div>
        
        <!-- Container utama yang lebih lebar -->
        <div class="container">
            <div class="main-content">
                <div class="left-section">
                    <div class="product-image">
                        <img src="user/produk.png" alt="produk">
                    </div>
                </div>
                
                <div class="form-section">
                    <table>
                        <tr>
                            <td>
                                <form action="fungsi/insert_data.php" method="post" enctype="multipart/form-data">
                                    <div class="product-details">
                                        <h2 class="product-title">Jelly Ball Soup</h2>
                                        <p class="product-description">Indulge in the exquisite taste of our jelly balls, crafted with the finest ingredients to tantalize your taste buds. Perfect for every occasion, our jelly balls are a delightful treat for everyone.</p>
                                        <div class="price">
                                            <h3 class="product-price">Rp. 15.000</h3>
                                        </div>
                                    </div>

                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" onchange="calculateTotal()">
                                    
                                    <div class="total-price">
                                        <strong>Total: <span id="total-amount">Rp. 15.000</span></strong>
                                    </div>
                                    
                                    <label for="customer_name">Customer Name:</label>
                                    <input type="text" id="customer_name" name="customer_name" required>
                                    
                                    <label for="address">Address:</label>
                                    <textarea id="address" name="address" required></textarea>
                                    
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="tel" id="phone_number" name="phone_number" required>
                                    
                                    <!-- Payment Method Selection -->
                                    <label for="payment_method">Payment Method:</label>
                                    <div class="payment-options">
                                        <div class="payment-option">
                                            <input type="radio" id="cod" name="payment_method" value="cod" checked>
                                            <label for="cod" class="payment-label">
                                                <i class="ri-hand-coin-line"></i>
                                                Cash on Delivery (COD)
                                            </label>
                                        </div>
                                        <div class="payment-option">
                                            <input type="radio" id="dana" name="payment_method" value="dana">
                                            <label for="dana" class="payment-label">
                                                <i class="ri-wallet-3-line"></i>
                                                DANA
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <!-- DANA Section -->
                                    <div id="dana-section" class="payment-section" style="display: none;">
                                        <div class="payment-container">
                                            <h4><i class="ri-wallet-3-line"></i> DANA Payment</h4>
                                            <div class="dana-qr-container">
                                                <div class="dana-qr-image">
                                                    <img src="user/dana-qr.jpg" alt="DANA QR Code">
                                                </div>
                                                <div class="dana-info">
                                                    <p class="dana-number">
                                                        <strong>DANA Number:</strong> 0821 9010 3763
                                                    </p>
                                                    <p class="dana-instruction">
                                                        Scan the QR code above or transfer to the DANA number
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="payment-steps">
                                                <h5>How to Pay with DANA:</h5>
                                                <ol>
                                                    <li>Open the DANA app</li>
                                                    <li>Select <strong>"Scan QR"</strong> or <strong>"Send Money"</strong></li>
                                                    <li>Scan the QR code above or enter the number: <strong>0821 9010 3763</strong></li>
                                                    <li>Enter the payment amount: <strong><span class="payment-amount">Rp. 15.000</span></strong></li>
                                                    <li>Confirm the payment</li>
                                                    <li>Take a screenshot of the payment proof</li>
                                                    <li>Upload the payment proof below</li>
                                                </ol>
                                            </div>
                                            <div class="upload-section">
                                                <label for="dana_proof">Upload DANA Payment Proof: <span class="required">*</span></label>
                                                <input type="file" id="dana_proof" name="payment_proof" accept="image/*">
                                                <small>Format: JPG, PNG, max 5MB</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="submit_order">Place Order</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="dashboard-footer">
        <p>&copy; YAM JELLY JOY | All rights reserved</p>
    </footer>

    <script>
        // Calculate total price based on quantity
        function calculateTotal() {
            const quantity = document.getElementById('quantity').value;
            const basePrice = 15000;
            const total = quantity * basePrice;
            
            // Update total display
            document.getElementById('total-amount').textContent = 'Rp. ' + total.toLocaleString('id-ID');
            
            // Update payment amount in DANA instructions
            const paymentAmount = document.querySelector('.payment-amount');
            if (paymentAmount) {
                paymentAmount.textContent = 'Rp. ' + total.toLocaleString('id-ID');
            }
        }

        // JavaScript untuk menampilkan/menyembunyikan DANA section
        document.addEventListener('DOMContentLoaded', function() {
            const codRadio = document.getElementById('cod');
            const danaRadio = document.getElementById('dana');
            const danaSection = document.getElementById('dana-section');
            const danaProof = document.getElementById('dana_proof');

            function toggleDanaSection() {
                if (danaRadio.checked) {
                    danaSection.style.display = 'block';
                    danaProof.required = true;
                } else {
                    danaSection.style.display = 'none';
                    danaProof.required = false;
                }
            }

            codRadio.addEventListener('change', toggleDanaSection);
            danaRadio.addEventListener('change', toggleDanaSection);
            
            // Initialize total calculation
            calculateTotal();
        });
    </script>
</body>
</html>