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
            header("Location: verifyD.php");
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
    
*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        background: #fafdff;
        overflow: hidden;
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

.grid_layout{
    display: grid;
    overflow: hidden;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;

}

.layouts{
    border-radius: 10px;
}

.layout_1{
    grid-column: span 1;
    grid-row: span 27;
    border-top: none;
    border-right: none;
    border-top: none;
}

.layout_2{
    grid-column: span 3;
    grid-row: span 27;
    border-top: none;
    overflow-y: scroll;
    height: 90vh;
}
.second_box{
  background-color: #fffdfd;
  margin: 7px 7px;
  height: 90vh;
}
.second_box .box_1{
  width: 700px;
  position: relative;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 300px;
  margin: auto;
  background-color: #fff;
  border-radius: 10px;
}

.second_box .box_1 img{
  width: 100%;
  object-fit: cover;
  max-height: 300px;
}
.second_box .box_1 .circle_box{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: -14%;
  right: 40%;
}

.second_box .box_1:hover{
  background-color: #f4f4f4;
}

.second_box .box_1 .circle_box img{
  border-radius: 50%;
  width: 100%;
  object-fit: cover;
  max-height: 150px;
}

.info{
  margin: 20px 0;
  background-color: #fff;
  box-shadow: -5px 0 5px -5px rgba(0, 0, 0, 0.2), /* Left side shadow */
         5px 0 5px -5px rgba(0, 0, 0, 0.2); /* Right side shadow */
  padding: 25px;
  border-radius: 20px;
  
}
.info li{
  list-style: none;
  line-height: 30px;
  opacity: 0.8;
  padding-left: 15px;
}

.follow{
  display: flex;
  gap: 10px;
  margin: 10px 10px;
}

.follow .following .btn1{
  padding: 10px 10px;
  background-color: #000;
  color: #fff;
  border: none;
  width: 130px;
}

.follow .followers .btn2{
  padding: 10px 10px;
  background-color: #fff;
  color: #000;
  border: none;
  width: 130px;
}

.follow .followers .btn2:hover{
  background-color: #000;
  color: #fff;
  opacity: 1;
}

.cards{
  display: flex;
  justify-content: space-between;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  width: 280px;
  height: 400px;
  text-align: center;
  border-radius: 10px;
  padding: 15px; /* Add padding to the card */
}

.card img{
  max-width: 100%;
  max-height: 300px;
  border-radius: 10px;
  object-fit: cover;
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
}

.card a {
  text-decoration: none;
  font-size: 22px;
  color: black;
  margin: 5px; /* Add margin to the social media icons */
}

button:hover, a:hover {
  opacity: 0.7;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 400px;
  margin: 40px auto;
  text-align: center;
  border-radius: 10px;
  padding: 15px; /* Add padding to the card */
}


.card1 img{
  max-width: 100%;
  max-height: 350px;
  border-radius: 10px;
  object-fit: cover;
}

.card1 .title {
  color: grey;
  font-size: 18px;
}

.card1 button {
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
}

.card1 a {
  text-decoration: none;
  font-size: 22px;
  color: black;
  margin: 5px; /* Add margin to the social media icons */
}

button:hover, a:hover {
  opacity: 0.7;
}



.boss{
  background-color: #fff;
  padding: 20px;
  box-shadow: -5px 0 5px -5px rgba(0, 0, 0, 0.2), /* Left side shadow */
         5px 0 5px -5px rgba(0, 0, 0, 0.2); /* Right side shadow */
  
}

.boss .short_info li{
  list-style: none;
  line-height: 30px;
  opacity: 0.8;
  padding-left: 15px;
}

.flex{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  flex-direction: row;

}

.image-container {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 280px;
  height: 420px;
  text-align: center;
  border-radius: 10px;
  padding: 15px; /* Add padding to the card */
  position: relative;
  margin-bottom: 30px;
}

    .image-container img{
        width: 250px;
        max-height: 300px;
        border-radius: 10px;
        object-fit: cover;
    }
    /* Style for the camera icon */
    .camera-icon {
      font-size: 50px;
      color: #aaa;
      margin-top: 40px;
      cursor: pointer;
    }

    /* Style for the upload button */
    .upload-button {
      margin-top: 10px;
      display: none;
    }

    /* Style for the trash icon */
    .trash-icon {
      position: absolute;
      bottom: 0;
      right: 10px;
      font-size: 20px;
      color: red;
      cursor: pointer;
    }

</style>
    </head>
    
   <body>
    <!-- begining of grid system -->
    <header>
        <div class="navigation">
                <img src="others/hmm-removebg-preview.png" alt="">
                <ul class="list">
            <li class="notification-badge">
                <a href="users.html" class="active" title="Home">
                    <i class="fa-solid fa-house"></i>
                    <span class="badge">5</span>
                </a>
            </li>
            <li><a href="#news" title="Contact"><i class="fa-solid fa-phone"></i></a></li>
            <li class="dropdown" title="About">
                <button class="dropbtn"><i class="fa-solid fa-circle-info"></i></button>
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
                <div class="chin">
                    <img src="images/pexels-andrew-personal-training-1322481.jpg" alt="Person" width="96" height="96">
                </div>
            </li>
        </ul>
    
            </div>
        
            
        </header>
                <!-- griding section     -->

    <section class="grid_layout">
        <div class="layout_1 layouts">
            <p>Box1</p>
        </div>
        <div class="layout_2 layouts">
            <div class="second_box">
              <div class="box_1">
                <div class="circle_box">
                  <img src="images/Brown-rose-gold-hair-color-for-black-women-removebg-preview.png" alt="">
                </div>
              </div>

              <div class="info">
                <ul>
                <?php
          include "config.php";
              $fname = $row['fname']; 
              $lname = $row['lname'];

          ?>
                  <li><strong><?php echo $fname. ' '.$lname ?></strong> <i class="fa fa-pencil"></i></li>
                  <li>5 years of experience  Arike <i class="fa fa-pencil"></i></li>
                  <li>+234 8022619320 <i class="fa fa-pencil"></i></li>
                  <li>Unity avenue street <i class="fa fa-pencil"></i></li>
                  <li>I Design bags, shoes, and wears for wedding and all <i class="fa fa-pencil"></i></li>
                </ul>
                </div>


                <!-- <div class="card1" onclick="showCard(this)">
                  <div class="imgg">
                    <img src="img/agidi.png" alt="">
                  </div>
                  <h1>John Doe</h1>
                  <p class="titl">CEO & Founder, Example</p>
                  
                  <p><button onclick="Contact()">Upload</button></p>
                </div>
 -->

              
                  <div class="flex">
                    <div class="image-container">
                      <input type="file" id="file-input-1" accept="image/*" onchange="handleFileChange('file-input-1')">
                      <img id="selected-image-1" src="" alt="Selected Image">
                      <button onclick="deleteImage('file-input-1')" style="margin-top: 20px;">Delete</button>
                    </div>
                  
                    <!-- Repeat the above image container for multiple images if needed -->
                  
                    <button onclick="uploadToDatabase()">Upload to Database</button>
                
                   
              </div>
        </div>
        </div>
        
    </section>


    <!-- Script to handle image selection and deletion -->
    <script>

function updateImage(inputId, imageId, deleteId) {
      const input = document.getElementById(inputId);
      const image = document.getElementById(imageId);
      const deleteButton = document.getElementById(deleteId);

      input.addEventListener('change', function () {
        if (input.files && input.files[0]) {
          const reader = new FileReader();

          reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
            deleteButton.style.display = 'block';
          };

          reader.readAsDataURL(input.files[0]);
        }
      });

      // Function to delete selected image
      deleteButton.addEventListener('click', function () {
        image.src = ''; // Clear the image
        deleteButton.style.display = 'none'; // Hide the delete button
        input.value = ''; // Clear the input file selection
      });
    }

    // Call the updateImage function for each image container
    updateImage('file-input-1', 'selected-image-1', 'delete-image-1');
    updateImage('file-input-2', 'selected-image-2', 'delete-image-2');
    updateImage('file-input-3', 'selected-image-3', 'delete-image-3');
    updateImage('file-input-4', 'selected-image-4', 'delete-image-4');
    updateImage('file-input-5', 'selected-image-5', 'delete-image-5');
    updateImage('file-input-6', 'selected-image-6', 'delete-image-6');
      function uploadImage(fileInputId) {
        const fileInput = document.getElementById(fileInputId);
        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('image', file);
  
        return fetch('uploads.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (response.ok) {
            return response.text();
          } else {
            throw new Error('Image upload failed');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          return null;
        });
      }
  
      function handleFileChange(inputId) {
        uploadImage(inputId)
          .then(response => {
            if (response !== null) {
              console.log('Image uploaded successfully:', response);
              // Handle success if needed
            } else {
              console.error('Image upload failed');
              // Handle error if needed
            }
          });
      }
  
      function uploadToDatabase() {
        uploadImage('file-input-1');
        // Upload other images similarly
        // Additional actions after uploading to the database can be performed here
      }
    </script>
</body>
</html>