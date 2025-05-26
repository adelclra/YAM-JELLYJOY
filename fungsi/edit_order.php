<?php
require 'fetch_order.php';
require 'update_order.php';

if (isset($_POST['update_order'])) {
    $order_id = intval($_GET['id']);
    $customer_name = $_POST['customer_name'];
    $order_date = $_POST['order_date'];
    $status = $_POST['status'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];

    if (update_order($order_id, $customer_name, $order_date, $status, $quantity, $address, $phone_number)) {
        header("Location: ../Admin/admin_dashboard.php?success=1");
        exit;
    } else {
        $error_message = "Error updating record.";
    }
} else if (isset($_GET['id'])) {
    $order_id = intval($_GET['id']);
    $order = fetch_order($order_id);
    if (!$order) {
        echo "Order tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order - YAMJELLYJOY</title>
    <link rel="stylesheet" href="edit_order.css">
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <button class="back-btn" onclick="goBack()">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m12 19-7-7 7-7"/>
                <path d="M19 12H5"/>
            </svg>
        </button>
        <div class="header-content">
            <h1>Edit Order</h1>
            <p>Order ID: #<?php echo htmlspecialchars($order['id']); ?></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Order Details</h2>
        </div>
        <div class="card-content">
            <?php if (!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <form id="edit-order-form" action="edit_order.php?id=<?php echo $order['id']; ?>" method="post" onsubmit="return validateForm();">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="customer_name">Customer Name</label>
                        <input type="text" id="customer_name" name="customer_name" class="form-input"
                               value="<?php echo htmlspecialchars($order['customer_name']); ?>" required>
                        <div class="error-message" id="customer_name_error"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="order_date">Order Date</label>
                        <input type="date" id="order_date" name="order_date" class="form-input"
                               value="<?php echo htmlspecialchars($order['order_date']); ?>" required>
                        <div class="error-message" id="order_date_error"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Pending" <?php if ($order['status'] == 'Pending') echo 'selected'; ?>>🟡 Pending</option>
                            <option value="Process" <?php if ($order['status'] == 'Process') echo 'selected'; ?>>🔵 Process</option>
                            <option value="Completed" <?php if ($order['status'] == 'Completed') echo 'selected'; ?>>🟢 Completed</option>
                        </select>
                        <div class="error-message" id="status_error"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-input"
                               value="<?php echo htmlspecialchars($order['quantity']); ?>" min="1" required>
                        <div class="error-message" id="quantity_error"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone_number">Phone Number</label>
                        <input type="tel" id="phone_number" name="phone_number" class="form-input"
                               value="<?php echo htmlspecialchars($order['phone_number']); ?>" required>
                        <div class="error-message" id="phone_number_error"></div>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="address">Address</label>
                        <textarea id="address" name="address" class="form-textarea" required><?php echo htmlspecialchars($order['address']); ?></textarea>
                        <div class="error-message" id="address_error"></div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" name="update_order" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                            <polyline points="17,21 17,13 7,13 7,21"/>
                            <polyline points="7,3 7,8 15,8"/>
                        </svg>
                        Update Order
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="goBack()">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 6 6 18"/>
                            <path d="m6 6 12 12"/>
                        </svg>
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }

    function validateForm() {
        let isValid = true;
        const fields = ['customer_name', 'order_date', 'status', 'quantity', 'phone_number', 'address'];
        fields.forEach(field => {
            const input = document.getElementById(field);
            const errorElement = document.getElementById(field + '_error');
            errorElement.textContent = '';
            if (!input.value.trim()) {
                errorElement.textContent = 'This field is required';
                isValid = false;
            }
        });

        const phoneInput = document.getElementById('phone_number');
        const phonePattern = /^[0-9+\-\s()]+$/;
        if (phoneInput.value && !phonePattern.test(phoneInput.value)) {
            document.getElementById('phone_number_error').textContent = 'Please enter a valid phone number';
            isValid = false;
        }

        const quantityInput = document.getElementById('quantity');
        if (quantityInput.value && parseInt(quantityInput.value) < 1) {
            document.getElementById('quantity_error').textContent = 'Quantity must be at least 1';
            isValid = false;
        }

        return isValid;
    }
</script>
</body>
</html>