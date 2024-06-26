<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/common.css">
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT ?>/public/img/login/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title><?php echo SITENAME; ?></title>
    <style>
        .dashboard-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 97.6%;
            padding: 20px;
            height: 60px;
        }


        .flex-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .row {
            display: flex;
            flex-direction: row;
            padding: 5px;
            gap: 10px;
        }

        .column {
            display: flex;
            flex-direction: column;
            padding: 5px;
            gap: 10px;
        }

        .half {
            width: 50%;
        }

        .space-between {
            justify-content: space-between;
        }

        .receptionist-dashboard-container {
            display: flex;
            flex-direction: column;
            padding: 5px;
            height: 100ch;
        }

        .rdh-item {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 30%;
            height: 100%;
        }

        .content-row-50 {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            /* align-items: center; */
            width: 100%;
            margin: 2em;
            /* height: 80vh; */
            border: 3px solid var(--brandgreen);
            border-radius: 41px;
        }

        .dashboard-content {
            display: flex;
            flex-direction: row;
            gap: 5em;
        }

        .content-row-50-head {
            display: flex;
            justify-content: flex-start;
            padding-left: 10%;
            align-items: center;
            /* width: 100%; */
            height: 10%;
            background-color: var(--brandgreen);
            border-radius: 41px 41px 0 0;
            padding: 10px;
            gap: 10px;
        }

        .content-row-50-body {
            display: flex;
            flex-direction: column;
            margin: 0 4% 4% 4%;
            background-color: rgb(223, 222, 222);
            border-radius: 41px 41px;
            padding: 2%;
        }

        .order-card-container {
            display: flex;
            flex-direction: column;
            padding: 3%;
            height: fit-content;
            background-color: white;
            border-radius: 30px;
            margin-bottom: 2%;
        }

        .orderNo {
            font-size: 1.5em;
            font-weight: 600;
        }

        section {
            max-height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar-template">
            <nav class="navbar">
                <div class="topbar">
                    <div class="logo-item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="<?php echo URLROOT ?>/public/img/login/dineease-logo.svg" alt="DineEase Logo">
                        <div class="topbar-title">
                            DINE<span>EASE</span>
                        </div>
                    </div>
                    <div class="navbar-content">
                        <div class="profile-details">

                            <span class="material-symbols-outlined material-symbols-outlined-topbar  topbar-notifications">notifications </span>
                            Hello, &nbsp; <?php echo ucfirst($_SESSION['role']) ?> <span class="user-name"> &nbsp; | &nbsp; <?php echo  $_SESSION['user_name'] ?></span>
                            <img src="<?php echo URLROOT ?>/img/profilePhotos/<?php echo $_SESSION['profile_picture'] ?>" alt="profile-photo" class="profile" />
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="sidebar-template">
            <nav class="sidebar">
                <div class="sidebar-container">
                    <div class="menu_content">

                        <ul class="menu_items">
                            <div class="menu_title menu_menu"></div>
                            <li class="item">
                                <a href="<?php echo URLROOT ?>/chefs/order" class="nav_link" onclick="changeContent('order')">
                                    <button class="button-sidebar-menu active-nav">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                list_alt
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Orders </span>
                                    </button>
                                </a>
                            </li>
                            <!-- End -->

                        </ul>
                        <hr class='separator'>

                        <ul class="menu_items">
                            <div class="menu_title menu_user"></div>
                            <li class="item">
                                <a href="<?php echo URLROOT ?>/chefs/profile" class="nav_link">
                                    <button class="button-sidebar-menu">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                account_circle
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">My Account </span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT; ?>/users/logout" class="nav_link">
                                    <button class="button-sidebar-menu">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                logout
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Logout</span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="body-template" id="content">
            <div class="tabset">
                <input type="radio" name="tabset" id="tab1" aria-controls="orders" checked>
                <label for="tab1">Orders in Queue</label>
                <input type="radio" name="tabset" id="tab2" aria-controls="items">
                <label for="tab2">Items in Queue</label>

                <div class="tab-panels">
                    <section id="orders" class="tab-panel">
                        <div class="receptionist-dashboard-container">

                            <div class="dashboard-content">
                                <div class="content-row-50">
                                    <div class="content-row-50-head">
                                        <span class="material-symbols-outlined"> inactive_order </span>
                                        <h2>Incoming Orders</h2>
                                        <span class="active-no" id="order-count-incoming">
                                        </span>
                                    </div>
                                    <div class="content-row-50-body" id="incoming-orders">
                                    </div>
                                </div>
                                <div class="content-row-50">
                                    <div class="content-row-50-head">
                                        <span class="material-symbols-outlined"> cooking </span>
                                        <h2>Active Orders</h2>
                                        <span class="active-no" id="order-count-active">
                                        </span>
                                    </div>
                                    <div class="content-row-50-body" id="active-orders">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="items" class="tab-panel">
                        <div class="dashboard-content">
                            <div class="content-row-50">
                                <div class="content-row-50-head">
                                    <span class="material-symbols-outlined"> inactive_order </span>
                                    <h2>Queued Items</h2>
                                    <span class="active-no" id="item-count-queued">
                                    </span>
                                </div>
                                <div class="content-row-50-body" id="queued-items">
                                </div>
                            </div>
                            <div class="content-row-50">
                                <div class="content-row-50-head">
                                    <span class="material-symbols-outlined"> inactive_order </span>
                                    <h2>Processing Items</h2>
                                    <span class="active-no" id="item-count-processing">
                                    </span>
                                </div>
                                <div class="content-row-50-body" id="processing-items">
                                </div>
                            </div>
                            <div class="content-row-50">
                                <div class="content-row-50-head">
                                    <span class="material-symbols-outlined"> cooking </span>
                                    <h2>Completed Items</h2>
                                    <span class="active-no" id="item-count-completed">
                                    </span>
                                </div>
                                <div class="content-row-50-body" id="completed-items">
                                </div>
                            </div>
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>

    <script src="<?php echo URLROOT; ?>/js/jquery-3.7.1.js"></script>
    <script src="<?php echo URLROOT; ?>/js/chef.js"></script>
</body>

</html>