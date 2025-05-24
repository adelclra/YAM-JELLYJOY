<?php
require 'connect_db.php';

function delete_order($order_id) {
    global $conn;
    $order_id = intval($order_id);
    
    $sql = "DELETE FROM orders WHERE id = $order_id";

    return $conn->query($sql);
}

if(isset($_GET['id'])) {
    $order_id = intval($_GET['id']);

    if(delete_order($order_id)) {
        echo "Order berhasil dihapus.";
        header("Location: ../Admin/admin_dashboard.php");
        exit;
    } else {
        echo "Gagal menghapus order.";
    }
} else {
    echo "ID tidak valid.";
    exit;
}
?>
