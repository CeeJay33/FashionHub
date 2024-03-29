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
            color: red;
        }

        header {
  padding: 0.25rem 0.5rem;
}

.navigation {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 99;
  width: 100%;
  gap: 1.5rem;
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
.list li a:hover,
.list li a.active {
  color: #000;
  border-bottom: 2px solid #000;
}

.start {
  display: flex;
  /* justify-content: right; */
  align-items: center;
  justify-content: space-between;
}
.start .btnn {
  background: #000;
  padding: 18px 30px;
  color: #fff;
  border-radius: 40px;
  border: 1px solid #fff;
}

.start .btnnn {
  color: #000;
  font-size: 16px;
  padding: 12px 30px;
  border-radius: 40px;
  border: 1px solid #fff;
}

button {
  border: none;
  cursor: pointer;
  padding: 18px 30px;
  opacity: 0.9;
}

button:hover {
  opacity: 1;
}

.menu-bar {
  width: 60px;
  height: 40px;
  display: none;
}

  /* Pop ups for login */
  .cancelbtn1, .deletebtn1 {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn1 {
  background-color: #ccc;
  color: black;
}


/* Add a color to the delete button */
.deletebtn1 {
  background-color: #000;
  color: #fff;
}

/* Add padding and center-align text to the container */
.container1 {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: #fff;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content1 {
  background-color: #fefefe;
  margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 50%;
  height: 200px; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close1 {
  position: absolute;
  right: 18%;
  top: 15%;
  font-size: 40px;
  font-weight: bold;
  color: #000;
}

.close1:hover,
.close1:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix1::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn1, .deletebtn1 {
    width: 100%;
  }
}




  /*End of Pop ups for login */

    /* Pop ups for Registration */

.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}


/* Add a color to the delete button */
.deletebtn {
  background-color: #000;
  color: #fff;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: #fff;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 50%;
  height: 200px; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 18%;
  top: 15%;
  font-size: 40px;
  font-weight: bold;
  color: #000;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}

.login{
    color: #000;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 15px;
    margin-right: 15px;
}

.signup a{
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border-radius: 15px;
    margin-right: 15px;
    font-size: 18px;
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


@media (max-width: 500px) {

  *{
      overflow-x: none;
    }
  .menu-bar {
    display: block;
  }

  .nav-links {
    flex-direction: column;
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    padding: 0 2rem;
    background-color: white;
    box-shadow: 2px 2px 8px #00000031;
    z-index: 1000;
    left: -500px;
    transition: all 1s ease-in;
  }

  .list,
  .start {
    flex-direction: column;
    gap: 2rem;
    padding: 2rem 0;
    left: 0;
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
      <nav class="navigation">
        <img src="./others/hmm-removebg-preview.png" alt="" />
        <!-- <div class="hamburger-menu">
    <i class="fas fa-bars" onclick="toggleMenu()"></i>
</div> -->
        <div class="nav-links active">
          <ul class="list">
            <li><a href="index.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="designers.php">Designers</a></li>
          </ul>
          <div class="start">
            <div class="login">
              <button
                class="btnnn"
                onclick="document.getElementById('id02').style.display='block'"
              >
                Login
              </button>
            </div>
            <div class="signup">
              <button
                class="btnn"
                onclick="document.getElementById('id01').style.display='block'"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
        <div class="menu-bar" id="menuBar">
        <i class="fas fa-bars" class="menu-bar" id="menuBar"></i>
        </div>
      </nav>
    </header>

     <!-- sign in pops -->
     <div id="id02" class="modal1">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="modal-content1">
            <div class="container1">
              <h1>Login As?</h1>
              <p>How do you want to be Logged in</p>
        
              <div class="clearfix1">
                <button type="button" class="cancelbtn1" onclick="window.location.href='LoginD.php'">Designer</button>
                <button type="button" class="deletebtn1" onclick="window.location.href='LoginC.php'">Customer</button>
              </div>
            </div>
          </form>
        </div>
        <!-- end of sign in pops -->

        <!-- Sign up pops -->
        <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="modal-content" action="/action_page.php">
            <div class="container">
              <h1>Register As?</h1>
              <p>How do you want to be Registered</p>
        
              <div class="clearfix">
                <button type="button" class="cancelbtn" onclick="window.location.href='SignUpD.php'">Designer</button>
                <button type="button" class="deletebtn" onclick="window.location.href='SignUpC.php'">Customer</button>
              </div>
            </div>
          </form>
        </div>
        



            
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
          <h4>Location : <span>Please login In order to view their Location</span></h4>
       </div>

       <div class="category">
        <p><?php echo $user['category']; ?></p>
     </div>

     <div class="contact">
      <h4>Email : <span>Please login In order to view their Email</span></h4>
      <h4>Phone : <span>Please login In order to view their Phone number</span></h4>
   </div>

      </div>
      </div>
      </body>
      </body>

      <script>
        "use strict";

(function startPage() {
  const menuBar = document.getElementById("menuBar");
  const navLinks = document.querySelector(".nav-links");
  menuBar.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
})();

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

const messageInput = document.getElementById('messageInput');
const sendButton = document.getElementById('sendButton');
const messageBox = document.querySelector('.message-box');

function sendMessage() {
    const message = messageInput.value.trim();

    if (message !== '') {
        const newMessage = document.createElement('div');
        newMessage.classList.add('message');
        newMessage.textContent = message;

        messageBox.appendChild(newMessage);

        messageInput.value = '';
    }
}

sendButton.addEventListener('click', sendMessage);

messageInput.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});


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