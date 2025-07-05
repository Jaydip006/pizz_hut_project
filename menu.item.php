<?php
// Include head section
require_once "include/head.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding-top: 30px;        
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
            <a href="menu.item.php">Menu Items</a>
            <a href="#orders" onclick="showTab('orders')">Orders</a>
            <a href="#users" onclick="showTab('users')">Users</a>
        </nav>

            <div id="menuItems" class="admin-tab" style="margin-left: 180px;">
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

        </body>
        </html>



        