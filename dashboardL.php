<?php
    session_start();
    include "config.php";
    $unique_id = $_SESSION['unique_id'];
    if(empty($unique_id)){
        header("Location: LoginD.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    if(mysqli_num_rows($qry) > 0){
        $row = mysqli_fetch_assoc($qry);
        if($row){
            $_SESSION['verification_status'] = $row['verification_status'];
            if($row['verification_status'] != 'verified'){
            header("Location: verify.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Online Boutique Store/Shop">
    <meta name="keywords" content="Clothes,bags,shoes,">
	<script src="https://kit.fontawesome.com/d5bd3063f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styless.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Kay_Jay_Boutique</title>
    <link rel="icon" href="./others/logo.png" type="image/x-icon">
</head>

<body>
<section id="header">
        <a href="#"><img src="" width="150" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="dashboard.php">Dashboard</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactUs.php">Contact</a></li>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
                <!--Main Dashboard-->
    <nav>
        <div class="logo-name">
            <div class="logo-image">
            <img src="../others/int.png" alt="">
            </div>

            <span class="logo_name"> KaylieJay</span>
        </div>
        <div class="menu-items">
            <ul class="ul nav-links">
            <li class="li">
                <a class="dashboard-link dashboardP-link active" id="dashboardP-link" href="dashboardP.php">
                <i class="fa-light fa-plus" style="font-size: 35px;"></i>
                    <span class="link-name"> Profiles</span>
                </a>
            </li>
            <li class="li">
                <a class="dashboard-link dashboardM-link active" id="dashboardM-link" href="dashboardM.php">
                <i class="fa-brands fa-facebook-messenger" style="color: #8da1c3;"></i>
                    <span class="link-name"> Message</span>
                </a>
            </li>
<!-- Other menu items -->

            <li class="li">
                <a class="dashboard-link dashboardM-link active" id="dashboardL-link" href="dashboardL.php">
                <i class="fa-solid fa-thumbs-up" style="color: #000;"></i>
                    <span class="link-name"> Likes</span>
                </a>
            </li>
<!-- Other menu items -->

            <li class="li">
                <a class="dashboard-link dashboardM-link active" id="dashboardN-link" href="dashboardN.php">
                <i class="fa-solid fa-bell" style="color: #000;"></i>
                    <span class="link-name"> Notification</span>
                </a>
            </li>
<!-- Other menu items -->

            </ul>

            <ul class="logout-mod">
            <li class="li">
                <a class="dashboard-link dashboardM-link active" id="dashboardS-link" href="dashboardS.php">
                <i class="fa-solid fa-gear" style="color: #000;"></i>
                    <span class="link-name">Settings</span>
                </a>
            </li>
<!-- Other menu items -->

            <li class="li">
                <a class="dashboard-link dashboardM-link active" id="dashboardLOG-link" href="dashboardLOG.php">
                <i class="fa-solid fa-right-from-bracket" style="color: #000;"></i>
                    <span class="link-name">LogOut</span>
                </a>
            </li>
<!-- Other menu items -->

          </ul>
        </div>
</nav>

<section class="dashboard">
    <div class="top">
        <i class="fa-solid fa-bars sidetoggle"></i>
    </div>
</section>

<script>
    const body = document.querySelector("body"),
    Sidebars_toggle = body.querySelector(".sidetoggle");
    sidebar = body.querySelector("nav");


    Sidebars_toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })
</script>
<script>
    const dashboardLinks = document.querySelectorAll('.dashboard-link');

    dashboardLinks.forEach(link => {
        link.addEventListener('click', () => {
            dashboardLinks.forEach(link => {
                link.classList.remove('active');
            });
            link.classList.add('active');
        });
    });
</script>

</body>
</html>