<?php
require 'connect_db.php';

function update_order($order_id, $customer_name, $order_date, $status, $quantity, $address, $phone_number) {
    global $conn;
    $order_id = intval($order_id);
    $customer_name = $conn->real_escape_string($customer_name);
    $order_date = $conn->real_escape_string($order_date);
    $status = $conn->real_escape_string($status);
    $quantity = intval($quantity);
    $address = $conn->real_escape_string($address);
    $phone_number = $conn->real_escape_string($phone_number);

    $sql = "UPDATE orders SET 
            customer_name='$customer_name', 
            order_date='$order_date', 
            status='$status', 
            quantity=$quantity, 
            address='$address', 
            phone_number='$phone_number' 
            WHERE id=$order_id";

    return $conn->query($sql);
}
?>
