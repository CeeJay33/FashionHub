<?php
    session_start();
    include "config.php";
    $unique_id = $_SESSION['unique_id'];
    if(empty($unique_id)){
        header("Location: Login.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM userd WHERE unique_id = '{$unique_id}'");
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
    <style>
        
        body{
            background-color: #fff;
        }
        .dashboard {
            margin-left: 20px;
    display: flex;
    width: 35%;
}

.user-list {
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-color: #fff;
    width: 100%;
}

.user {
    display: flex;
    align-items: center;
    margin: 10px;
    padding: 10px;
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.user:hover {
    background-color: #f0f0f0;
    border: 1px solid #088178;
    transition: 0.8s ease;
}

.user img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.username {
    font-size: 18px;
}

    #header{
        z-index: 9;
    }

        .nav-right {
    position: fixed;
    top: 20%;
    right: 0;
    height: 80vh;
    width: 45%;
    padding: 10px 14px;
    transition: var(--tran-05);
    background-color: #f0f0f0;
    border-left: 1px solid #ccc;
    z-index: 9;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
}

.chat-box {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    overflow-y: scroll;
}

.chat-header {
    background-color: #088178;
    color: white;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}

.chat-messages {
    flex-grow: 1;
    padding: 10px;
}

.message {
    margin: 10px 0;
    padding: 5px;
    border-radius: 5px;
}

.sent {
    background-color: #088178;
    color: white;
    align-self: flex-start;
    flex-wrap: wrap;
    width: 70%;
    margin-left: 90px;

}

.received {
    background-color: #fff;
    align-self: flex-end;
    flex-wrap: wrap;
    width: 80%;

}

.chat-input {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ccc;
}

#message-input {
    flex-grow: 1;
    padding: 5px;
    border: none;
    border-radius: 3px;
    outline: none;
}

#send-button {
    background-color: #088178;
    color: white;
    border: none;
    border-radius: 3px;
    padding: 5px 10px;
    cursor: pointer;
    outline: none;
}

.messenger-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 24px;
        }

        .chat-message {
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
        }

        .sender-message {
            background-color: #088178;
            color: white;
            align-self: flex-end;
        }

        .receiver-message {
            background-color: #fff;
            color: black;
            align-self: flex-start;
        }



nav{
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: 30px;
}

.dashboard .top{
    position: fixed;
    left: 250px;
    display: flex;
    width: 30px;
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 1;
}

#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    width: 100%;
    background: #e3e6f3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    position: sticky;
    top: 0;
    left: 0;
}

#navbar{
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li{
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active {
    color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after{
    content: "";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left: 20px;
}

#mobile{
    display: none;
    align-items: center;
}

#close{
    display: none;
}
    </style>
</head>

<body>
<section id="header" style="background-color: #fff;box-shadow: 0;">
<a href="#"><img src="others/hmm-removebg-preview.png" width="150" class="logo" alt=""></a>
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

<<section class="dashboard">
    <div class="top">
        <i class="fa-solid fa-bars sidetoggle"></i>
    </div>
    <div class="user-list">
        <div class="user">
            <img src="images/pexels-adrienne-andersen-2661255.jpg" alt="User 1">
            <span class="username">Arianna george</span>
        </div>
        <div class="user">
            <img src="images/e22e56a97e1129969303c844cb1daa08.jpg" alt="User 2">
            <span class="username">Hannah Owens</span>
        </div>
        <div class="user">
            <img src="images/e22e56a97e1129969303c844cb1daa08.jpg" alt="Hannah Owens">
            <span class="username">Hannah Owens</span>
        </div>
        <div class="user">
            <img src="images/e22e56a97e1129969303c844cb1daa08.jpg" alt="Hannah Owens">
            <span class="username">Hannah Owens</span>
        </div>
        <div class="user">
            <img src="images/e22e56a97e1129969303c844cb1daa08.jpg" alt="Hannah Owens">
            <span class="username">Hannah Owens</span>
        </div>
        <div class="user">
            <img src="images/e22e56a97e1129969303c844cb1daa08.jpg" alt="Hannah Owens">
            <span class="username">Hannah Owens</span>
        </div>
    </div>
</section>

<aside class="nav-right hidden">
    <div class="logo-name">
        <div class="logo-image">
            <img src="../others/int.png" alt="">
        </div>
    </div>
    <div class="chat-box">
    <div class="chat-header">
                <h3>Chat Box</h3>
            </div>
        <div class="chat-messages" id="chat-messages">
        </div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button">Send</button>
        </div>
        </div>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const chatMessages = document.getElementById("chat-messages");
    const messageInput = document.getElementById("message-input");
    const sendButton = document.getElementById("send-button");

    sendButton.addEventListener("click", function () {
        const messageText = messageInput.value.trim();
        if (messageText !== "") {
            const messageElement = document.createElement("div");
            messageElement.classList.add("message", "sent");
            messageElement.textContent = messageText;

            chatMessages.appendChild(messageElement);
            messageInput.value = "";
        }
    });

    // Simulate receiving a message
    function receiveMessage(messageText) {
        const messageElement = document.createElement("div");
        messageElement.classList.add("message", "received");
        messageElement.textContent = messageText;

        chatMessages.appendChild(messageElement);
    }

    // Simulate receiving a message after a delay
    setTimeout(function () {
        receiveMessage("Hello! How are you?");
    }, 2000);

    setTimeout(function () {
        receiveMessage("I am a fashionist it's nice to meet you");
    }, 8000);

    setTimeout(function () {
        receiveMessage("Well said please contact me if you are interested in me");
    }, 20000);

    setTimeout(function () {
        receiveMessage("Well said please contact me if you are interested in me");
    }, 30000);

    setTimeout(function () {
        receiveMessage("Well said please contact me if you are interested in me");
    }, 40000);
});
    document.addEventListener("DOMContentLoaded", function () {
            const navRight = document.querySelector(".nav-right");
            const chatBox = document.querySelector(".chat-box");
            const toggleChat = document.getElementById("toggle-chat");
            const messengerIcon = document.getElementById("messenger-icon");
            const messageInput = document.getElementById("message-input");
            const sendButton = document.getElementById("send-button");
            const chatMessages = document.getElementById("chat-messages");

            toggleChat.addEventListener("click", function () {
                chatBox.classList.toggle("hidden");
            });

            messengerIcon.addEventListener("click", function () {
                chatBox.classList.toggle("hidden");
            });

            sendButton.addEventListener("click", function () {
                const message = messageInput.value;
                if (message.trim() !== "") {
                    const messageElement = document.createElement("div");
                    messageElement.classList.add("chat-message");
                    messageElement.textContent = message;
                    chatMessages.appendChild(messageElement);
                    messageInput.value = "";
                }
            });
        });

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