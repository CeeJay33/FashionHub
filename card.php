<?php
  session_start();
  include "config.php";
  $unique_id = $_SESSION['unique_id'];
  if(empty($unique_id)){
      header("Location: Login.php");
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
        font-family: sans-serif;
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

/* griding layout */

.grid_layout {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    overflow: hidden; /* Prevents horizontal scrolling */
  }

  .layout {
    padding: 20px;
    border-radius: 10px;
  }

  .layout2 {
    grid-column: span 3;
    grid-row: span 27;
    overflow-y: scroll;
    z-index: 0;
    max-height: 90vh; 
    

  }

  .layout3 {
    grid-column: span 1;
    grid-row: span 20;
    border-left: none;
    border-top: none;
    overflow-y: scroll;
    position: sticky;
    top: 0;
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

button {
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
    </style>
</head>
<body>
    <header>
    <div class="navigation">
            <img src="others/hmm-removebg-preview.png" alt="">
            <ul class="list">
        <li class="notification-badge">
            <a href="users.php" class="active" title="Home">
                <i class="fa-solid fa-house"></i>
                <span class="badge">5</span>
            </a>
        </li>
        <li><a href="contactcus.php" title="Contact"><i class="fa-solid fa-phone"></i></a></li>
        <li class="dropdown" title="About">
            <button class="dropbtn"><i class="fa-solid fa-circle-info"></i></button>
            <div class="dropdown-content"></div>
        </li>
    </ul>
    <ul class="third">
        <li><a href=""><i class="fa-solid fa-tags"></i></a></li>
        <div class="notification-badge">
    <a href="#message" title="Messages">
    <i class="fab fa-facebook-messenger" id="open_message"></i>
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
            <div class="chin">
                <img src="images/pexels-andrew-personal-training-1322481.jpg" alt="Person" width="96" height="96">
            </div>
        </li>
    </ul>

        </div>
    
        
    </header>

    <!-- creating dashboard with grid layouts -->
    <section class="grid_layout">
        
         
        </div>
        <div class="layout layout2">
          <div class="all">
          <?php
include "config.php";

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
                <p><button><a href="intro.php?uniqued=<?php echo $unique_id; ?> "style="color: #fff;" >Contact</a></button></p>
            </div>
            <?php
    }

?>

        </div>
          

          
            
          </div>
        </div>
        
        <div class="layout layout3">
          <div class="Contact">

          </div>
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

    // sendding the div the div to the box
    messageSpace.appendChild(messageDiv);
    messageSpace.appendChild(Time);

    inputField.value = '';

    messageSpace.scrollTop = messageSpace.scrollHeight;
}

document.getElementById('send_button').addEventListener('click', sendMessage);

document.getElementById('message_input').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

  function CloseMessage(){
    let Message = document.getElementById('message_space');
    Message.style.display = 'none';
  }

  document.getElementById('close').addEventListener('click', CloseMessage);

  function OpenMessage(){
    let Message = document.getElementById('message_space');
    Message.style.display = 'flex';
  }

  document.getElementById('open_message').addEventListener('click', OpenMessage);



  // for Contact pop ups

  function showCard(card) {
    // Clone the clicked card
    var clonedCard = card.cloneNode(true);

    // Clear any existing content in the Contact div
    document.querySelector('.Contact').innerHTML = '';

    // Append the cloned card to the Contact div
    document.querySelector('.Contact').appendChild(clonedCard);
  }
    </script>


</body>
</html>
