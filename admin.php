<?php
// Include head section
require_once "include/head.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding-top: 30px;
        }
        .sidebar a {
            color: #ffffff;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }
        .content {
            padding: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <h4 class="text-center">Admin</h4>
            <a href="#Dashbord" onclick="showTab('dashboard')">Dashboard</a>
            <a href="menu.item.php" onclick="showTab('menuItems')">Menu Items</a>
            <a href="#orders" onclick="showTab('orders')">Orders</a>
            <a href="#users" onclick="showTab('users')">Users</a>
        </nav>

         <!-- Main Content -->
         <main class="col-md-9 ml-sm-auto col-lg-10 content">
            <div id="dashboard" class="admin-tab">
                <h2>Dashboard</h2>
                <p style="color:white">Welcome back, Admin!</p>
            </div>

            <div id="menuItems" class="admin-tab" style="display:none;">
                <h2>Manage Menu Items</h2>
                <button class="btn btn-primary mb-3" style="color:white">Add New Item</button>
                <table class="table table-bordered">
                    <thead>
                        <tr style="color:white">
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="color:white">
                            <td>1</td>
                            <td>Italian Pizza</td>
                            <td>$2.90</td>
                            <td>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
             <!-- Add more rows dynamically from DB -->
             </tbody>
                </table>
            </div>
            </body>

            <div id="orders" class="admin-tab" style="display:none;">
                <h2>Recent Orders</h2>
                <p style="color:white">List of latest customer orders...</p>
                <!-- Order table can go here -->
            </div>

            <div id="users" class="admin-tab" style="display:none;">
                <h2>Registered Users</h2>
                <p style="color:white">List of all registered users...</p>
                <!-- Users table can go here -->
            </div>
        </main>
    </div>
</div>

<!-- JavaScript to toggle tabs -->
<script>
    function showTab(tabId) {
        const tabs = document.querySelectorAll('.admin-tab');
        tabs.forEach(tab => {
            tab.style.display = 'none';
        });
        document.getElementById(tabId).style.display = 'block';
    }
</script>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Include footer
require_once "include/footer.php";
?>


