<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/manager-style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT ?>/public/img/login/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <title><?php echo SITENAME; ?></title>
</head>

<style>
    /* Add your CSS styles here */
    body {
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
        font-family: "Poppins", sans-serif;
        background-color: #f5f5f5;
        transition: all 0.5s ease;
        overflow-x: hidden;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
    }

    .container {
        
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 63px !important;
    }

    label {
        display: block;
        margin-bottom: 8px;
        margin-top: 16px;
        font-weight: bold;
    }

    input,
    select {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    .imagePart button {
        background-color: green;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .imagePart button:hover {
        background-color: lightgreen;
    }

    .error {
        color: red;
        font-size: 12px;
        margin-top: 4px;
    }

    .imagePart {
        margin-bottom: 15px;
    }

    .imagePart img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
        display: block;
    }
.name{
    margin-top: 50px !important;
}
    .buttonGroup {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        /* Adjust the margin as needed */
    }

    button[type="submit"],
    button[type="reset"],
    .home-link {
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"] {
        background-color: green;
        color: #fff;
    }

    button[type="reset"] {
        background-color: red;
        color: #fff;
    }

    .home-link {
        background-color: #2ecc71;
        color: #fff;
    }

    .buttonGroup button:hover,
    .home-link:hover {
        filter: brightness(90%);
        /* Add a hover effect, adjust as needed */
    }
</style>

<body>



    
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
                            <span class="material-symbols-outlined material-symbols-outlined-topbar ">notifications </span>
                            <?php
                            $user_id = $_SESSION['user_id'];
                            $profile_picture_url = URLROOT . '/uploads/profile/' . basename($_SESSION['profile_picture']);
                            ?>
                            Hello, &nbsp; <?php echo ucfirst($_SESSION['role']) ?> <span class="user-name"> &nbsp; | &nbsp; <?php echo  $_SESSION['user_name'] ?></span>
                            <a href="<?php echo URLROOT . '/managers/viewmanagerprofile' ?>">
                                <img src="<?php echo URLROOT ?>/img/profilePhotos/<?php echo $_SESSION['profile_picture'] ?>" alt="profile-photo" class="profile" />
                            </a>
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
                                <a href="<?php echo URLROOT ?>/managers/dashboard" class="nav_link nav_link_switch" data-content='home'>
                                    <button class="button-sidebar-menu " id="homeButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                dashboard
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Dashboard</span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT ?>/managers/getUsers" class="nav_link nav_link_switch" data-content='home'>
                                    <button class="button-sidebar-menu active-nav" id="homeButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                manage_accounts
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Users</span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT ?>/managers/menu" class="nav_link" data-content='reservation'>
                                    <button class="button-sidebar-menu " id="reservationButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                restaurant_menu
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Menus </span>
                                    </button>
                                </a>
                            </li>


                            <li class="item">
                                <a href="<?php echo URLROOT; ?>/managers/updatetimecategories" class="nav_link" data-content='menu'>
                                    <button class="button-sidebar-menu" id="reservationButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                category
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Categories </span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT; ?>/managers/packages" class="nav_link" data-content='menu'>
                                    <button class="button-sidebar-menu" id="reservationButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                Package
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Packages </span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT; ?>/managers/viewtables" class="nav_link" data-content='menu'>
                                    <button class="button-sidebar-menu" id="reservationButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                Table_Restaurant
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Tables </span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                                <a href="<?php echo URLROOT; ?>/managers/handlediscounts" class="nav_link" data-content='menu'>
                                    <button class="button-sidebar-menu " id="reservationButton">
                                        <span class="navlink_icon">
                                            <span class="material-symbols-outlined ">
                                                sell
                                            </span>
                                        </span>
                                        <span class="button-sidebar-menu-content">Discounts</span>
                                    </button>
                                </a>
                            </li>
                            <li class="item">
                            <a href="<?php echo URLROOT; ?>/managers/reports" class="nav_link" data-content='menu'>
                                <button class="button-sidebar-menu " id="reservationButton">
                                    <span class="navlink_icon">
                                        <span class="material-symbols-outlined ">
                                            lab_profile
                                        </span>
                                    </span>
                                    <span class="button-sidebar-menu-content">Reports</span>
                                </button>
                            </a>
                        </li>
                        <li class="item">
                            <a href="<?php echo URLROOT; ?>/managers/reservations" class="nav_link" data-content='menu'>
                                <button class="button-sidebar-menu  " id="reservationButton">
                                    <span class="navlink_icon">
                                        <span class="material-symbols-outlined ">
                                            book_online
                                        </span>
                                    </span>
                                    <span class="button-sidebar-menu-content">Reservations</span>
                                </button>
                            </a>
                        </li>
                            <!-- End -->


                        </ul>
                        <hr class='separator'>

                        <ul class="menu_items">
                            <div class="menu_title menu_user"></div>



                            <li class="item">

                                <a href="<?php echo URLROOT . '/managers/viewmanagerprofile' ?>" class="nav_link" data-content='menu'>
                                    <button class="button-sidebar-menu" id="reservationButton">
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
        <div class="container">
        <form action="<?php echo URLROOT; ?>/managers/addUsers" method="post" enctype="multipart/form-data">
            <label for="name" class ="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase letter, one lowercase letter, and at least 8 characters" required>

            <label for="role">Role Type:</label>
            <select id="role" name="role" required>
                <!--<option value="1">Manager</option> -->
                <option value="2">Inventory Manager</option>
                <option value="3">Receptionist</option>
                <option value="4">Chef</option>
            </select>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span class="error"><?php echo isset($data['email_err']) ? $data['email_err'] : ''; ?></span>

            <label for="joined_date">Joined Date:</label>
            <input type="date" id="joined_date" name="joined_date" max="<?php echo date('Y-m-d'); ?>" required>

            <label for="nic">NIC:</label>
            <input type="text" id="nic" name="nic" required>
            <span class="error"><?php echo isset($data['nic_err']) ? $data['nic_err'] : ''; ?></span>

            <label for="mobile_number">Mobile Number:</label>
            <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
            <span class="error"><?php echo isset($data['mobile_no_err']) ? $data['mobile_no_err'] : ''; ?></span>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <span class="error"><?php echo isset($data['dob_err']) ? $data['dob_err'] : ''; ?></span>

            <!-- Input for profile picture -->
            <div class="imagePart">
                <button type="button" id="imageButton">Add Image</button>
                <input type="file" name="imagePath" accept="image/*" style="display: none;" id="imageInput" onchange="previewImage(event)">
                <img src="" alt="Image Preview">
            </div>

            <div class="buttonGroup">
                <button type="submit">Add User</button>
                <button type="reset">Reset Form</button>

            </div>
        </form>
    </div>

    <script>
        document.getElementById('imageButton').addEventListener('click', function() {
            document.getElementById('imageInput').click();
        });

        function previewImage(event) {
            var input = event.target;
            var preview = document.querySelector('.imagePart img');
            var reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>

</body>

</html>