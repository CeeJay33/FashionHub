<?php
include "config.php";

// Check if the 'uniqued' parameter is set in the URL
if (isset($_GET['uniqued'])) {
    // Get the user ID from the URL
    $userId = $_GET['uniqued'];

    // Prepare and execute a parameterized query to fetch user details
    $query = "SELECT * FROM userd WHERE uniqued = ?";
    $stmt = $conn->prepare($query);

    // Bind the user ID parameter
    $stmt->bind_param('i', $userId); // Assuming user ID is an integer

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists and display details
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5bd3063f6.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
       *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body{
        font-family: sans-serif;
        color: #000;
        background: #fff;
      }

        span{
            font-size: 15px;
            font-weight: 400;
        }

        header {
  padding: 0.25rem 0.5rem;
}

.nav-links {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 2.5rem;
}

.navigation img {
  width: 180px;
  height: 80px;
}

.list {
  display: flex;
  list-style: none;
  gap: 1.5rem;
}

.list li {
  font-size: 18px;
  font-family: sans-serif;
}

.list li a {
  color: #000;
  text-decoration: none;
}



.menu-bar {
  width: 60px;
  height: 40px;
  display: none;
}

    .navigation{
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    left: 0;
    background: #fff;
    box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.2);
}

.navigation img{
    width: 180px;
    height: 80px;
}

.navigation a {
  float: left;
  font-size: 18px;
  color: #000;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  border-radius: 20px;
}

.notification-badge {
            position: relative;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 5px 8px;
            font-size: 12px;
        }

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
  z-index: 999;

}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  margin: auto;
  border: none;
  outline: none;
  color: rgb(14, 8, 8);
  border-radius: 20px;
  padding: 10px 16px;
  font-size: 18px;
    font-family: sans-serif;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

.navigation a:hover, .dropdown:hover .dropbtn {
  background-color: #000;
  color: #fff;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: flex;
}

.list{
    display: flex;
    list-style: none;
    gap: 50px;
    font-family: sans-serif;
    opacity: 0.9;
}

.list .active{
  background-color: #000;
  color: #fff;
  border-radius: 20px;
}

.list li{
    font-size: 18px;
    font-family: sans-serif;
}

.third{
    display: flex;
    margin-right: 20px;
    gap: 25px;
    opacity: 0.9;
}

.third li{
    list-style: none;
}

.third .chin{
  background: #fff;
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 13px;
  font-weight: lighter;
  line-height: 50px;
  border-radius: 25px;
  font-family: sans-serif;
  cursor: pointer;
}


.third .chin img {
  float: right;
  margin: 0 10px 0 -25px;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  object-fit: cover;
}


.main_container{
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.info{
  padding: 20px 2rem;
  height: 480px;
  /* box-shadow: inset 0 0 10px 5px rgba(125, 124, 124, 0.1); */
  background: #fff;
  border-radius: 15px;
  margin-right: 10px;
  
}

.title{
  display: flex;
  justify-content: space-between;
  margin-right: 3rem;
}
.company_name h3{
  font-size: 35px;
  font-family: Georgia, 'Times New Roman', Times, serif;
}
.followers{
  padding: 1rem 0;
}

.rating_followers i{
  color: gold;
}
        .carousel-container {
  width: 100%;
  text-align: center;
  margin-left: 1rem;
  /* border: 1px solid rgb(226, 224, 224); */
  border-radius: 10px;
  background-color: #fff;
}

.main-image img {
  width: 320px;
  height: 400px;
  border-radius: 7px;
}

.company_logo img{
  width: 90px;
}

.thumbnail-images {
  margin-top: 20px;
}
.thumbnail-images img{
    width: 120px;
    height: 180px;
    border-radius: 5px;
    margin-bottom: 5px;
}
.thumbnail {
  width: 80px;
  height: 60px;
  margin-right: 10px;
  cursor: pointer;
  border: 1px solid #ccc;
}

.thumbnail:hover {
  border: 1px solid #000;
}

.contact{
  line-height: 30px;
}
.contact_sec{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #040424;
    padding: 20px 0;
    border-radius: 5px;
}

.carousel-container button{
    border: none;
    background-color: #000;
    color: #fff;

}

.carousel-container .btn{
    padding: 10px 0;
    width: 50%;
    margin-top: 10px;
    cursor: pointer;
}

.category{
  padding: 1rem 0;
  line-height: 25px;
}

.category p{
  font-size: 16px;
}

@media (max-width: 500px){

html{
  overflow-x: hidden;
}

.nav-links {
display: flex;
flex-direction: column;
position: fixed;
top: 0;
bottom: 0;
height: 100%;
padding: 0 2rem;
background-color: #fff;
left: -500px;
transition: all 1s ease-in;
width: 82%;

}
.list li{
margin: 10px 0;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}
.menu-bar {
display: block;
}

.nav-links.active {
left: 0;
transition: all 1s ease-out;
}


.main_container {
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  width: 100%;
  flex-direction: column;
}

.carousel-container {
  width: 100%;
  text-align: center;
  margin-left: 0;
  /* border: 1px solid rgb(226, 224, 224); */
  border-radius: 10px;
  background-color: #fff;
}
}

    </style>
</head>
<body>

<header>
    <div class="navigation">
            <img src="others/hmm-removebg-preview.png" alt="">
            <div class="nav-links active">
            <ul class="list">
        <li class="notification-badge">
            <a href="users.php" class="active" title="Home">
                <i class="fa-solid fa-house"></i>
                <span class="badge">5</span>
            </a>
        </li>
        <li><a href="contactcus.php" title="Contact"><i class="fa-solid fa-phone"></i></a></li>
        <li class="dropdown" title="About">
            <a href="about.php"><i class="fa-solid fa-circle-info"></i></a>
            <div class="dropdown-content"></div>
        </li>
    </ul>
    <ul class="third">
        <li><a href="users.html"><i class="fa-solid fa-tags"></i></a></li>
        <div class="notification-badge">
    <a href="#message" title="Messages">
    <i class="fab fa-facebook-messenger"></i>
        <span class="badge">3</span>
    </a>
</div>
        <li class="notification-badge">
            <a href="users.html" title="Notifications">
                <i class="fa-solid fa-bell"></i>
                <span class="badge">1</span>
            </a>
        </li>
        <li>
        <button id="darkModeToggle">
    <i class="fas" id="lightModeIcon">&#xf185;</i>
    <i class="fas d-none" id="darkModeIcon">&#xf186;</i>
  </button>
        </li>
    </ul>

        </div>
        <div class="menu-bar" id="menuBar">
        <i class="fas fa-bars" class="menu-bar" id="menuBar"></i>
        </div>
      </div>
        
    </header>

<div class="main_container">
    <div class="carousel-container">
        <!-- Using PHP to populate the main image -->
        <div class="main-image">
            <?php
            // Fetch the first image associated with the user
            $firstImageQuery = "SELECT * FROM images WHERE user_id = ? LIMIT 1";
            $stmt_first_image = $conn->prepare($firstImageQuery);
            $stmt_first_image->bind_param('i', $userId);
            $stmt_first_image->execute();
            $result_first_image = $stmt_first_image->get_result();

            if ($row_first_image = $result_first_image->fetch_assoc()) {
                echo '<img src="' . $row_first_image['file_path'] . '" alt="Main Image">';
            } else {
                echo '<img src="' . $user['file_path'] . '" alt="Main Image">';
            }
            ?>
        </div>
        <div class="thumbnail-images">
            <!-- Using PHP to populate thumbnail images from the database -->
            <?php
            // Fetch and display user images in thumbnails
            $images_query = "SELECT * FROM images WHERE user_id = ?";
            $stmt_images = $conn->prepare($images_query);
            $stmt_images->bind_param('i', $userId);
            $stmt_images->execute();
            $result_images = $stmt_images->get_result();

            while ($row = $result_images->fetch_assoc()) {
                echo '<img src="' . $row['file_path'] . '" alt="Thumbnail" class="thumbnail">';
            }
            ?>
        </div>
    </div>
    <div class="info">
        <div class="title">
            <!-- Using PHP to populate company name -->
            <div class="company_name">
                <h3><?php echo $user['company_name']; ?></h3>
            </div>
            <!-- Using PHP to populate the company logo -->
            <div class="company_logo">
                <img src="<?php echo $user['file_path']; ?>" alt="Company Logo">
            </div>
        </div>
        <div class="rating_followers">
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-full"></i>
          </div>

          <div class="followers">
            <p>300k Follwers</p>
          </div>

        </div>

        <div class="category">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quam, eveniet id illo repellendus expedita, pariatur sunt eaque aliquam fugit sequi commodi saepe sed vel dolorem molestiae temporibus nemo nesciunt.</p>
        </div>

        <div class="location">
          <h4>Location : <span><?php echo $user['address']; ?></span></h4>
       </div>

       <div class="category">
        <p><?php echo $user['category']; ?></p>
     </div>

     <div class="contact">
      <h4>Email : <span><?php echo $user['email']; ?></span></h4>
      <h4>Phone : <span><?php echo $user['phone_number']; ?></span></h4>
   </div>

      </div>
      </div>
      </body>
      </body>

      <script>
       document.addEventListener("DOMContentLoaded", function () {
  const mainImage = document.querySelector(".main-image img");
  const thumbnails = document.querySelectorAll(".thumbnail");

  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
      const thumbnailSrc = thumbnail.getAttribute('src');
      mainImage.src = thumbnailSrc;
    });
  });
});


"use strict";

(function startPage() {
  const menuBar = document.getElementById("menuBar");
  const navLinks = document.querySelector(".nav-links");
  menuBar.addEventListener("click", () => {
  navLinks.style.display = 'flex';
    navLinks.classList.toggle("active");
  });
})();

      </script>
      
</body>
</html>

<?php
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "User ID not provided.";
}
?>