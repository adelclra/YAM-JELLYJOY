<?php
require '../fungsi/ambil_dataOders.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../landing_page/img/logo_yamjellyjoy.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="landing page\img\logo yamjellyjoy.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>YAM JELLYJOY - Dashboard</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <div class="logo-name"><span>YAM<span>JELLYJOY</span></span></div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../logout.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Log out
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
        </nav>

        <!-- End of Navbar -->

        <main>
            <!-- Enhanced moving text with perfect centering -->
            <div class="moving-text-container">
                <h1 class="moving-text">Dashboard</h1>
            </div>
            <!-- End of enhanced moving text -->

            <div class="bottom-data">
                <div class="orders">
                    <div class="orders__header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Orders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><p><?php echo htmlspecialchars($order['customer_name']); ?></p></td>
                                <td><?php echo htmlspecialchars($order['order_date']); ?></td>
                                <td><span class="status <?php echo strtolower(htmlspecialchars($order['status'])); ?>"><?php echo htmlspecialchars($order['status']); ?></span></td>
                                <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="orders details-orders">
                    <div class="orders__header">
                        <i class='bx bx-receipt'></i>
                        <h3>Details Orders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Qty</th>
                                    <th>Payment</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($orders as $order):
                                    $customer_name = htmlspecialchars($order['customer_name']);
                                    $order_date = htmlspecialchars($order['order_date']);
                                    $status = htmlspecialchars($order['status']);
                                    $quantity = htmlspecialchars($order['quantity']);
                                    $address = htmlspecialchars($order['address']);
                                    $phone_number = htmlspecialchars($order['phone_number']);
                                    $payment_method = isset($order['payment_method']) ? htmlspecialchars($order['payment_method']) : 'COD';
                                    $id = htmlspecialchars($order['id']);
                                ?>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <p><?php echo $customer_name; ?></p>
                                        </div>
                                    </td>
                                    <td><?php echo date('d/m/Y', strtotime($order_date)); ?></td>
                                    <td><span class="status <?php echo strtolower($status); ?>"><?php echo $status; ?></span></td>
                                    <td><span class="quantity-badge"><?php echo $quantity; ?></span></td>
                                    <td>
                                        <div class="payment-method">
                                            <?php if ($payment_method === 'DANA'): ?>
                                                <span class="payment-badge dana">
                                                    <i class='bx bx-wallet'></i>
                                                    DANA
                                                </span>
                                            <?php else: ?>
                                                <span class="payment-badge cod">
                                                    <i class='bx bx-money'></i>
                                                    COD
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="address-cell" title="<?php echo $address; ?>">
                                            <?php echo strlen($address) > 30 ? substr($address, 0, 30) . '...' : $address; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="phone-cell">
                                            <i class='bx bx-phone'></i>
                                            <?php echo $phone_number; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="../fungsi/edit_order.php?id=<?php echo $id; ?>" class="btn btn-edit" title="Edit Order">
                                                <i class='bx bx-edit'></i>
                                            </a>
                                            <a href="../fungsi/delete_order.php?id=<?php echo $id; ?>" class="btn btn-delete" title="Delete Order" onclick="return confirm('Are you sure you want to delete this order?')">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="index_centered.js"></script>
</body>

</html>
