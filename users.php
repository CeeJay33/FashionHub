<?php
  session_start();
  include "config.php";
  $unique_id = $_SESSION['unique_id'];
  if(empty($unique_id)){
      header("Location: LoginC.php");
  }
  $qry = mysqli_query($conn, "SELECT * FROM userc WHERE unique_id = '{$unique_id}'");
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
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
  <link rel="stylesheet" type="text/css" href="css/change.css">
    <title>Kay_Jay_Boutique</title>
    <link rel="icon" href="./others/logo.png" type="image/x-icon">
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }

    body{
        background: #fafdff;
        overflow: hidden;
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

.list {
    display: flex;
    /* justify-content: center; */
    /* list-style: none; */
    align-items: center;
    margin-right: 8rem;
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

/* griding layout */

.grid_layout {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(4, 1fr);
    overflow: hidden; /* Prevents horizontal scrolling */
  }

  .layout {
    padding: 20px;
    border-radius: 10px;
  }

  .layout1 {
    grid-column: span 1;
    grid-row: span 27;
    border-right: none;
    border-top: none;
    position: sticky;
    top: 0;
  }

  .layout2 {
    grid-column: span 2;
    grid-row: span 27;
    overflow-y: scroll;
    z-index: 0;
    max-height: 90vh; 
  }

  .layout4 {
    grid-column: span 1;
    grid-row: span 20;
    border-left: none;
    border-top: none;
    overflow-y: scroll;
    position: sticky;
    top: 0;
    /* You can adjust the top value to control where the fixed box starts */
  }

  /* content for the left layer */
.layout.layout1{
  display: flex;
  flex-direction: column;
  align-items: first baseline;
}

.layout.layout1 hr{
  border-color: #c2c2c2;
}

.left_bar{
  padding: 17px 0;
  display: flex;
}

.left_bar h4{
  font-family: sans-serif;
  font-weight: 600;
  padding-left: 10px;
  opacity: 0.7;
}
.left_bar i{
  color: rgb(51, 116, 161);
}

.left_bar .chi{
  display: inline-block;
  padding-top: 3px;
  padding: 0 25px;
  height: 50px;
  font-size: 14px;
  font-family: sans-serif;
  line-height: 50px;
  border-radius: 25px;
  cursor: pointer;
}

.left_bar .chi h4{
  padding-top: 12px;
  font-size: 16px;
  opacity: 0.8;
}

.left_bar .chi img{
  float: left;
  margin: 22px -30px;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  object-fit: cover;
}

.left_bar a{
  text-decoration: none;
  color: #000;
}

/* content for the right bar */
.layout.layout4{
  display: flex;
  flex-direction: column;
  overflow-y: scroll;
  max-height: 90vh;
}

.layout.layout4 h3{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
  font-weight: 500;

}

.layout.layout4 .search{
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.layout.layout4 .search input{
  width: 230px;
  height: 30px;
  border-left: none;
  border-top: none;
  border-radius: none;
  outline: none;
  font-size: 16px;
}
.layout.layout4 .search i{
  background-color: blue;
  color: #fff;
  padding: 5px 7px;
}
.right_bar{
  display: flex;
  padding: 20px 0;
}

.Contact{
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.chips {
  background: #fff;
  display: inline-block;
  width: 230px;
  padding: 0 25px;
  height: 50px;
  font-size: 13px;
  font-weight: lighter;
  line-height: 50px;
  border-radius: 25px;
  font-family: sans-serif;
  cursor: pointer;
}

.chips:hover{
  background-color: #f1f1f1f1;
}

.chips img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  object-fit: cover;
}

  /* content for the middle layer */

  .lay_color{
    background: #fff;
    padding: 10px 10px;
    border-radius: 10px;
    border: 1px solid #c2c2c2;
    border-top: none;
    margin-bottom: 10px;
  }
  .chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 14px;
  font-family: sans-serif;
  line-height: 50px;
  border-radius: 25px;
  cursor: pointer;
}

.chip a{
  color: #000;
}

.chip:hover{
  border-color: rgb(51, 116, 161);
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  object-fit: cover;
}

.des{
    padding: 10px;
}

.des li{
    list-style: none;
    line-height: 30px;
    font-size: 15px;
    color: #000;
    opacity: 0.7;
    font-family: sans-serif;

}


.stories span{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
  padding: 10px 190px;
  border-radius: 20px;
}











/* flexing images for layout 2 */

.images{
  padding-top: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.images .image{
  border: 1px solid #eeeff0;
  border-radius: 20px;
  
}
.images .image img{
    width: 170px;
    height: 300px;
    object-fit: cover;
}
.layout.layout2 hr{
  border: 1px solid #f0ebeb;
  margin: 10px 5px;
}
.social{
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.social a{
  text-decoration: none;
  color: #000;
  font-size: 16px;
  font-weight: 600;
  font-family: sans-serif;
}
.social i{
  opacity: 0.9;
  font-size: 18px;
  cursor: pointer;
}

.social i:hover{
  color: red;
  opacity: 1;
}


.trend_list{
  display: flex;
  justify-content: space-evenly;
  padding-top: 7px;

}

.oga{
  text-align: center;
    text-align: center;
    height: 380px;
    background-color: #fff;
    border: 1px solid #c2c2c2;
    border-top: none;
    margin: 30px 0;
    border-radius: 10px;
}

.trend_list .card {
  box-shadow: 0 0 8px 1px rgba(0, 0, 0, 0.2);
  width: 180px;
  height: 300px;
  text-align: center;
  margin: 10px 0;
   border-radius: 10px;
  cursor: pointer;
}

.card img{
  object-fit: cover;
  max-width: 180px;
  max-height: 200px;
}

.card .title {
  color: grey;
  font-size: 18px;
  padding: 10px 0;
}

.card button {
  border: none;
  border-radius: 20px;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card a{
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}


.see{
 
  position: relative;
  bottom: -20px;
}

.see p{
  cursor: pointer;
  opacity: 0.8;
}
.see p:hover{
  cursor: pointer;
  opacity: 0.6;
}

.see i{
  opacity: 0.8;
  padding-top: 7px;
  cursor: pointer;
}

.see i:hover{
  opacity: 0.6;
  padding-top: 7px;
  cursor: pointer;
}

.chipz {
  background: #fff;
  display: inline-block;
  width: 270px;
  padding: 0 25px;
  height: 100px;
  font-size: 13px;
  font-weight: lighter;
  line-height: 50px;
  border-radius: 25px;
  font-family: sans-serif;
  cursor: pointer;
  margin: 10px 0;
}

.chipz:hover{
  background-color: #f1f1f1f1;
}

.chipz img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  object-fit: cover;
}
.chipz .add{
  display: flex;
  gap: 7px;
}
.chipz .botin1{
  background-color: #000;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

.chipz .botin2{
  background-color: #efecec;
  color: #000;
  font-weight: 400;
  padding: 10px 15px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

.message_space {
            background-color: #fff;
            border-radius: 20px;
            width: 320px;
            height: 450px;
            display: flex;
            flex-direction: column; /* Reverse the order of messages */
            justify-content: flex-start;
            border: 1px solid #a9a5a5;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 18.5%;
            right: 0;
            height: 90vh;
            overflow-y: scroll;
            display: none;
        }

        .message_space i{
          padding: 3px 4px;
          font-size: 20px;
          cursor: pointer;
        }

        .message_space i:hover{
          opacity: 0.6;
        }

        /* Style for sender's messages */
        .sender {
            background-color: rgb(51, 116, 161);
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            text-align: right;
            align-self: flex-end; /* Align sender messages to the right */
            margin: 5px;
        }

        .time{
            font-size: 14px;
            opacity: 0.6;
            text-align: right;
            align-self: flex-end; /* Align sender messages to the right */
        }

        /* Style for receiver's messages */
        .receiver {
            background-color: #f2f2f2;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            text-align: left;
            align-self: flex-start; /* Align receiver messages to the left */
        }

        /* Style for the input field and send button container */
        #input_container {
            background-color: transparent;
            padding: 10px;
            display: flex;
            justify-content: space-between; /* Place input and button at the bottom */
            position: fixed;
            bottom: 0;
        }

        /* Style for the input field */
        #message_input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 10px;
            margin-right: 10px;
        }

        /* Style for the send button */
        #send_button {
            background-color: #000000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        @media (max-width: 500px){

          html{
            overflow: hidden;
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
    z-index: 90;
    left: -500px;
    transition: all 1s ease-in;
    width: 100%;
   
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



.trend {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
}


.layout.layout1 {
    display: none;
    
}

.lay_color{
  border: none;
  width: 400px;
    position: relative;
    left: -20px;
    padding-left: 25px;
    border-radius: 1px;
}

.layout2 {
  grid-column: span 4;
    grid-row: span 27;
    overflow-y: scroll;
    z-index: 0;
    height: 71vh;
}

.images .image img {
    width: 170px;
    height: 220px;
    object-fit: cover;
    border-radius: 10px;
}

/* Updated CSS for the layout and chip cards */
.layout.layout4 {
    display: none;
    flex-direction: row;
    overflow-x: auto; 
    overflow-y: hidden;
    align-items: flex-end;
    padding-bottom: 4rem; /* Add some bottom padding for better visibility */
}
.layout4{
  display: none;
  grid-column: span 4;
  overflow-y: hidden;
  height: 21vh;
}

.layout4 h3{
  display: none;
}

.layout4 .chipz {
    flex: 0 0 auto; /* Ensure chip cards don't grow or shrink */
    margin-right: 10px; /* Add margin between chip cards */
    background-color: #f2f2f2; /* Optional: Adjust background color */
    padding: 10px 15px; /* Optional: Add padding to the chip cards */
}

        }



        @media screen and (max-width: 408px) and (max-height: 768px) {

html{
  overflow-y: hidden;
  height: 50vh;
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
z-index: 90;
left: -500px;
transition: all 1s ease-in;
width: 100%;

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



.trend {
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
}


.layout.layout1 {
display: none;

}

.lay_color{
border: none;
}

.layout2 {
grid-column: span 4;
grid-row: span 27;
overflow-y: scroll;
z-index: 0;
height: 80vh;
}

.images .image img {
width: 160px;
height: 200px;
object-fit: cover;
border-radius: 10px;
}

/* Updated CSS for the layout and chip cards */
.layout.layout4 {
    display: none;
    flex-direction: row;
    overflow-x: auto;
    overflow-y: hidden;
    align-items: flex-end;
    padding-bottom: 4rem;
}
.layout4{
  display: none;
grid-column: span 4;
overflow-y: hidden;
height: 21vh;
}

.layout4 h3{
display: none;
}

.layout4 .chipz {
flex: 0 0 auto; /* Ensure chip cards don't grow or shrink */
margin-right: 10px; /* Add margin between chip cards */
background-color: #f2f2f2; /* Optional: Adjust background color */
padding: 10px 15px; /* Optional: Add padding to the chip cards */
}

}


        @media screen and (max-width: 360px) and (max-height: 740px) {

html{
  overflow-y: hidden;
  height: 50vh;
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
z-index: 90;
left: -500px;
transition: all 1s ease-in;
width: 100%;

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



.trend {
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
}


.layout.layout1 {
display: none;

}

.lay_color{
border: none;
}

.layout2 {
grid-column: span 4;
grid-row: span 27;
overflow-y: scroll;
z-index: 0;
height: 67vh;
}

.images .image img {
width: 140px;
height: 200px;
object-fit: cover;
border-radius: 10px;
}

/* Updated CSS for the layout and chip cards */
.layout.layout4 {
    display: none;
    flex-direction: row;
    overflow-x: auto;
    overflow-y: hidden;
    align-items: flex-end;
    padding-bottom: 4rem;
}
.layout4{
  display: none;
grid-column: span 4;
overflow-y: hidden;
height: 21vh;
}

.layout4 h3{
display: none;
}

.layout4 .chipz {
flex: 0 0 auto; /* Ensure chip cards don't grow or shrink */
margin-right: 10px; /* Add margin between chip cards */
background-color: #f2f2f2; /* Optional: Adjust background color */
padding: 10px 15px; /* Optional: Add padding to the chip cards */
}

}

@media screen and (max-width: 375px) and (max-height: 787px) {

html{
  overflow-y: hidden;
  height: 50vh;
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
z-index: 90;
left: -500px;
transition: all 1s ease-in;
width: 86%;

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



.trend {
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
}


.layout.layout1 {
display: none;

}

.lay_color{
border: none;
}

.layout2 {
grid-column: span 4;
grid-row: span 27;
overflow-y: scroll;
z-index: 0;
height: 67vh;
}

.images .image img {
width: 150px;
height: 200px;
object-fit: cover;
border-radius: 10px;
}

/* Updated CSS for the layout and chip cards */
.layout.layout4 {
    display: none;
    flex-direction: row;
    overflow-x: auto;
    overflow-y: hidden;
    align-items: flex-end;
    padding-bottom: 4rem;
}
.layout4{
  display: none;
grid-column: span 4;
overflow-y: hidden;
height: 21vh;
}

.layout4 h3{
display: none;
}

.layout4 .chipz {
flex: 0 0 auto; /* Ensure chip cards don't grow or shrink */
margin-right: 10px; /* Add margin between chip cards */
background-color: #f2f2f2; /* Optional: Adjust background color */
padding: 10px 15px; /* Optional: Add padding to the chip cards */
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

    <!-- creating dashboard with grid layouts -->
    <section class="grid_layout">
        <div class="layout layout1">
          <?php
          include "config.php";
          $fname = $row['fname']; 
          $lname = $row['lname'];

          ?>
          <div class="left_bar">
            <div class="chi">
              <img src="images/pexels-andrew-personal-training-1322481.jpg" alt="Person" width="96" height="96">
             <h4><strong><?php echo $fname." ".$lname ?></strong></h4>
            </div>
          </div>
          <div class="left_bar">
            <i class="fas fa-users"></i>
            <h4><a href="friends.html">Friends</a></h4>
          </div>
          <div class="left_bar">
            <i class="fas fa-user"></i>
            <h4><a href="groups.php">Groups</a></h4>
          </div>
          <div class="left_bar">
            <i class="fas fa-circle-info"></i>
            <h4><a href="trending.php">Tending</a></h4>
          </div>
          <div class="left_bar">
            <i class="fas fa-user-plus"></i>
            <h4><a href="request.php">Request</a></h4>
          </div>
          <br>
          <hr noshade width="80%" size="1px">
          <br>
          <br>
          <div class="left_bar">
            <i class="fas fa-tags"></i>
            <h4><a href="card.php">Card-Place</a></h4>
          </div>
          <div class="left_bar">
            <i class="fas fa-gear"></i>
            <h4><a href="settings.php">Settings</a></h4>
          </div>
         
        </div>
        <div class="layout layout2">
            <div class="lay_color" >

           
  </div>
</div>

<!-- another one --><!-- Updated HTML/PHP structure -->
<div class="layout layout4">
    <h3>Fashion Designers</h3>
    <?php
    include "config.php";
    $sql = "SELECT file_path, company_name, uniqued FROM userd";
    $user_data = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($user_data)) {
        ?>
        <div class="chipz" data-uniqued="<?php echo $row['uniqued']; ?>">
            <img src="<?php echo $row['file_path']; ?>" alt="Person" width="96" height="96">
            <span><strong><?php echo $row['company_name'] ?></strong></span>
            <div class="add">
                <button class="botin1">View Details</button>
                <button class="botin2">Message</button>
            </div>
        </div>
        <?php
    }
    ?>
</div>

        <div class="message_space" id="message_space">
          <i class="fas fa-times-circle" id="close"></i>	</i>
          <!-- Messages will be dynamically added here -->
        
          <!-- Input field and send button container -->
          <div id="input_container">
              <input type="text" id="message_input" placeholder="Type your message...">
              <button id="send_button">Send</button>
          </div>
      </div>
  
    </section>

    <script src="javaa.js"></script>

    <script>
      let sessionTimeout = 5 * 60 * 60 * 1000;
      let timer;

      function startSessionTimer(){
        timer = setTimeout(logoutUser, sessionTimeout);
      }

      function resetSessionTimer() {
        clearTimeout(timer);
        timer = setTimeout(logoutUser, sessionTimeout);
      }

      function logoutUser(){
        window.location.href = 'LoginC.php';
      }

      document.addEventListener('click', resetSessionTimer);
      document.addEventListener('keydown', resetSessionTimer);
      document.addEventListener('scroll', resetSessionTimer);
      document.addEventListener('mousemove', resetSessionTimer);



      function sendMessage() {
    const inputField = document.getElementById('message_input');
    const message = inputField.value.trim();
    if (message === '') return;

    const senderId = /* Your sender ID logic here */;
    const receiverId = /* Your receiver ID logic here */;

    fetch('send_message.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            sender_id: senderId,
            receiver_id: receiverId,
            message_content: message
        })
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Log server response
        // Add logic to handle success or display feedback to the user

        // After sending the message to the server, update UI if needed
        const messageSpace = document.getElementById('message_space');
        const currentDate = new Date();
        const hours = currentDate.getHours();
        const minutes = currentDate.getMinutes();
        const ampm = hours >= 12 ? 'pm' : 'am';
        const formattedHours = hours % 12 === 0 ? 12 : hours % 12;
        const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
        const currentTime = `${formattedHours}:${formattedMinutes} ${ampm}`;

        const Time = document.createElement('div');
        Time.textContent = currentTime;
        Time.className = 'time';

        const messageDiv = document.createElement('div');
        messageDiv.className = 'sender';
        messageDiv.textContent = message;

        // Append the new message and time to the message container
        messageSpace.appendChild(messageDiv);
        messageSpace.appendChild(Time);

        inputField.value = '';
        messageSpace.scrollTop = messageSpace.scrollHeight;
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors or display error messages
    });
}

// Rest of your existing code remains unchanged
document.getElementById('send_button').addEventListener('click', sendMessage);

document.getElementById('message_input').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

function CloseMessage() {
    let Message = document.getElementById('message_space');
    Message.style.display = 'none';
}

document.getElementById('close').addEventListener('click', CloseMessage);

function OpenMessage() {
    let Message = document.getElementById('message_space');
    Message.style.display = 'flex';
}

document.getElementById('open_message').addEventListener('click', OpenMessage);












function retrieveMessages() {
    // Use the current user's ID obtained from PHP in your JavaScript code
    const senderId = currentUserId; // Use the PHP user ID in JavaScript

    // Logic to get receiver ID (replace this with your actual receiver ID logic)
    const receiverId = getReceiverId(); // Replace this with your logic to get the receiver ID

    // Fetch messages using sender and receiver IDs
    fetch(`get_messages.php?sender_id=${senderId}&receiver_id=${receiverId}`)
        .then(response => response.json())
        .then(data => {
            displayMessages(data);
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors or display error messages
        });
}

// Call retrieveMessages when the page loads or whenever needed
retrieveMessages();

    </script>


<script>
    const messageSpace = document.getElementById('message_space');
    document.addEventListener("DOMContentLoaded", function() {
        var messageButtons = document.querySelectorAll('.botin2');

        messageButtons.forEach(function(button) {
            button.addEventListener('click', function() {
              messageSpace.style.display = 'flex';
                // You can replace the alert with your custom message box logic here
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Existing HTML and PHP code -->
<!-- ... -->
<script>
    $(document).ready(function () {
    var clickedUsers = JSON.parse(localStorage.getItem('clickedUsers')) || [];

    $('.botin1').on('click', function () {
        var uniqued = $(this).closest('.chipz').data('uniqued');

        if (!clickedUsers.includes(uniqued)) {
            clickedUsers.push(uniqued);

            $.ajax({
                type: 'GET',
                url: 'get_user_details.php',
                data: { uniqued: uniqued },
                success: function (response) {
                    $('.lay_color').append(response);
                    localStorage.setItem('clickedUsers', JSON.stringify(clickedUsers));
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });

            // Remove the parent card of the clicked "Accept" button
            $(this).closest('.chipz').remove();
        }
    });

    clickedUsers.forEach(uniqued => {
        $.ajax({
            type: 'GET',
            url: 'get_user_details.php',
            data: { uniqued: uniqued },
            success: function (response) {
                $('.layout2').append(response);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script>


</body>
</html>
