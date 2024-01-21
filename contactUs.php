<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Online Boutique Store/Shop">
    <meta name="keywords" content="Clothes,bags,shoes,">
	<script src="https://kit.fontawesome.com/d5bd3063f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
            color: #000;
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
    #page-header{
        background-image: url(others/gradient-banner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 40vh;
        display: flex;
        justify-content: center;
        text-align: center;
        flex-direction: column;
        padding: 14px;
    }

    #page-header h2,
    #page-header p{
        color: #fff;
    }
    #contact-details{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#contact-details .details{
    width: 40%;
}

#contact-details .details span,
#form-details form span{
    font-size: 12px;
}

#contact-details .details h2,
#form-details form h2{
    font-size: 26px;
    line-height: 35px;
    padding: 20px 0;
    color: #000;
}

#contact-details .details h3{
    font-size: 16px;
    padding-bottom: 15px;
}

#contact-details .details li{
    list-style: none;
    display: flex;
    padding: 10px 0;
}
#contact-details .details li i{
    font-size: 14px;
    padding-right: 22px;
}

#contact-details .details li p{
    margin: 0;
    font-size: 14px;
}

#contact-details .map{
    width: 55%;
    height: 400px;
}

#contact-details .map iframe{
    width: 100%;
    height: 100%;
}

#form-details{
    display: flex;
    justify-content: space-between;
    margin: 30px;
    padding: 80px;
    padding: 80px;border: 1px solid #e1e1e1;
}

#form-details form{
    width: 65%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

#form-details form input,
#form-details form textarea{
    width: 100%;
    padding: 12px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #e1e1e1;
}

#form-details form button{
    background-color: #088178;
    color: #fff;
}


#form-details .people div{
    padding-bottom: 25px;
    display: flex;
    align-items: flex-start;
}

#form-details .people div img{
    object-fit: cover;
    margin-right: 15px;
    border-radius: 50%;
}

#form-details .people div p{
    margin: 0;
    font-size: 13px;
    line-height: 25px;
}
#form-details h2{
    color: #000;
}

#form-details .people div p span{
    display: block;
    font-size: 16px;
    font-weight: 600;
    color: #000;
}


/* For screens up to 477px */
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

#contact-details {
        flex-wrap: wrap;
        text-align: left;
    }

    #contact-details .details{
        width: 100%;
        margin-bottom: 30px;
    }

    #contact-details .map{
        width: 100%;
    }

    #form-details form button {
    background-color: #000;
    color: #fff;
    width: 100%;
}

    #form-details{
        margin: 10px;
        padding: 30px 10px;
        flex-wrap: wrap; 
    }
    #form-details form{
        width: 100%;
        margin-bottom: 30px
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
            
        </header>
    <section id="page-header" class="about-header"  data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
        <h2>#Contact</h2>
        <p>LEAVE A MESSAGE.We would love to hear from you.</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of Our branch nearby you or contact us</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fas fa-map"></i>
                    <p>37 Mende maryland Street Lagos Nigeria</p>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <p>Chrismiracle911@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+234 802 2619 320</p>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <p>Monday to Saturday 9:00am to 6pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5748250153924!2d3.371011035853041!3d6.575219393445592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93a4eda0a6d7%3A0xadf66242432251b0!2sMaryland!5e0!3m2!1sen!2sng!4v1686826561932!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MSESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="./others/shutterstock_648907024.jpg" alt="" width="100">
                <p><span>Serah Morgan</span> Senior Marketing Manager <br>Phone: 000 123 847 543 <br>Email: SeniorNar@gmail.com</p>
            </div>
            <div>
                <img src="images/photo-1522529599102-193c0d76b5b6.jpeg" alt="" width="100">
                <p><span>Bright Monday</span> Senior Marketing Manager <br>Phone: 000 123 847 543 <br>Email: SeniorNar@gmail.com</p>
            </div>
            <div>
                <img src="./others/imageCarousel.imageformat.1564x780.211579236.png" alt="" width="100">
                <p><span>Veronica Wells</span> Senior Marketing Manager <br>Phone: 000 123 847 543 <br>Email: SeniorNar@gmail.com</p>
            </div>
        </div>
    </section>

    <footer class="section-p1" data-aos="fade-down" data-aos-duration="10000" data-aos-once="true">
        <div class="col">
            <img class="loho" src="./others/hmm-removebg-preview.png" width="150">
            <h4>Contacts</h4>
            <p><strong>Address:</strong> 100 Mende road, Street 3, Maryland</p>
            <p><strong>Phone:</strong> +234 8022619320</p>
            <p><strong>Hours:</strong> 9:00 - 10:00, mon - sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pintrest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="./others/pay/images.png" width="100" alt="">
            </div>
            <img src="./others/pay/paystack.png" width="300" alt="">
        </div>
        <div class="copyright">
            <p>&#169; 2021, Joshkaytech - Online Kay_Jay_Boutique</p>
        </div>
    </footer>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!--Custom js file-->
	<script type="text/javascript" src="./java/java.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js">
	</script>
	<script>
		AOS.init({
			duration: 3000,
			once: true,
		})

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