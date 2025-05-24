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
        echo "Order updated successfully";
        header("Location: ../Admin/admin_dashboard.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
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
    <title>Edit Order</title>
    <link rel="stylesheet" href="path_to_your_css_file.css">
</head>
<body>
    <h2>Edit Order</h2>
    <form action="edit_order.php?id=<?php echo $order['id']; ?>" method="post">
        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customer_name" value="<?php echo htmlspecialchars($order['customer_name']); ?>" required><br>

        <label for="order_date">Order Date:</label>
        <input type="date" id="order_date" name="order_date" value="<?php echo htmlspecialchars($order['order_date']); ?>" required><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending" <?php if ($order['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Process" <?php if ($order['status'] == 'Process') echo 'selected'; ?>>Process</option>
            <option value="Completed" <?php if ($order['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
        </select><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?php echo htmlspecialchars($order['quantity']); ?>" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($order['address']); ?>" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars($order['phone_number']); ?>" required><br>

        <button type="submit" name="update_order">Update Order</button>
    </form>
</body>
</html>
