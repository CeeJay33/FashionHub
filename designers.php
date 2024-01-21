<?php
  // session_start();
  // include "config.php";
  // $unique_id = $_SESSION['unique_id'];
  // if(empty($unique_id)){
  //     header("Location: Login.php");
  // }
  // $qry = mysqli_query($conn, "SELECT * FROM userc WHERE unique_id = '{$unique_id}'");
  // if(mysqli_num_rows($qry) > 0){
  //     $row = mysqli_fetch_assoc($qry);
  //     if($row){
  //         $_SESSION['verification_status'] = $row['verification_status'];
  //         if($row['verification_status'] != 'verified'){
  //         header("Location: verify.php");
  //         }
  //     }
  // }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Online Boutique Store/Shop">
    <meta name="keywords" content="Clothes,bags,shoes,">
	<script src="https://kit.fontawesome.com/d5bd3063f6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Kay_Jay_Boutique</title>
    <link rel="icon" href="./others/logo.png" type="image/x-icon">
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
  padding: 36px;
  text-align: center;
}

.container1 h1{
    padding-bottom: 5px;
}

.container1 p{
    padding-bottom: 10px;
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
  padding: 36px;
  text-align: center;
}

.container h1{
    padding-bottom: 5px;
}

.container p{
    padding-bottom: 10px;
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
    color: #fff;
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



.all{
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  width: 280px;
  text-align: center;
  border-radius: 10px;
  padding: 15px; /* Add padding to the card */
}

.card h1{
  padding-bottom: 10px;
}
.card p{
  padding-bottom: 5px;
}

.card img{
  max-width: 100%;
  max-height: 300px;
  border-radius: 10px;
  object-fit: cover;
}

.title {
  color: grey;
  font-size: 18px;
}

.card button {
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-radius: 10px; /* Add border-radius to the button */
  margin-top: 10px; /* Add some spacing between the button and other elements */
}

.card a {
  text-decoration: none;
  font-size: 22px;
  color: black;
  margin: 5px; /* Add margin to the social media icons */
}

.card i{
  color: gold;
}

button:hover, a:hover {
  opacity: 0.7;
}

@media (max-width: 500px) {

html{
  overflow-x: hidden;
}
.menu-bar {
display: block;
}

.nav-links {
display: none;
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

.all {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    /* margin: auto; */
    justify-content: center;
}

.all .card{
  margin-top: 40px
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

          <div class="all">
          <?php
include "config.php";

$sql = "SELECT file_path, company_name, uniqued FROM userd";
$user_data = $conn->query($sql);

while ($row = mysqli_fetch_assoc($user_data)) {
    $unique_id = $row['uniqued'];
?>
            <div class="card" >
                <img src="<?php echo $row['file_path'] ?>" alt="User Image" style="width:100%">
                <h1><?php echo $row['company_name'] ?></h1>
                <p class="title">Fashion Designer</p>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <p><button><a href="detail.php?uniqued=<?php echo $unique_id; ?> "style="color: #fff;" >Contact</a></button></p>
            </div>
            <?php
    }

?>

        </div>
          

          
            
          </div>
        </div>
    


  
    </section>
    <script>
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
