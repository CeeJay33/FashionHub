<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Online Boutique Store/Shop">
    <meta name="keywords" content="Clothes,bags,shoes,">
	<script src="https://kit.fontawesome.com/d5bd3063f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/change.css">
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
    width: 100%;
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
background-color: transparent;
z-index: 90;
left: -500px;
transition: all 1s ease-in;
width: 82%;

}

.list{
    margin-left: 6rem;
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
        <li>
            <a href="contactcus.php" title="Contact"><i class="fa-solid fa-phone"></i></a>
        </li>
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
	<script type="text/javascript" src="javaa.js"></script>
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