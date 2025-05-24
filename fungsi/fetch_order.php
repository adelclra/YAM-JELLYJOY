<?php
require 'connect_db.php';

function fetch_order($order_id) {
    global $conn;
    $order_id = intval($order_id);
    $sql = "SELECT * FROM orders WHERE id = $order_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
