<?php
require 'connect_db.php';

if(isset($_POST['submit_order'])) {
    // Ambil data dari form
    $customer_name = $_POST['customer_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $quantity = intval($_POST['quantity']); // Konversi ke integer untuk keamanan

    // Cek apakah username sudah ada dalam database
    $check_query = "SELECT * FROM orders WHERE customer_name = '$customer_name'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        // Jika username sudah ada, tampilkan pesan alert
        echo "<script>alert('Username sudah terpakai'); window.location.href='../shop.php';</script>";
    } else {
        // Buat query untuk memasukkan data ke dalam tabel orders
        $sql = "INSERT INTO orders (customer_name, address, phone_number, quantity) VALUES ('$customer_name', '$address', '$phone_number', $quantity)";

        // Jalankan query
        if ($conn->query($sql) === TRUE) {
            // Redirect ke index.php dan tampilkan pesan sukses
            header("Location: ../index.php?success=1");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
