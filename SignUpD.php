<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up </title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body{
    position: relative;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(img/flat-lay-stationary-arrangement-desk-with-copy-space-coffee\ \(2\).jpg);
    background-repeat: no-repeat;
    background-size: cover;
}


    </style>
</head>
<body>

    


    <div class="form" id="myForm" style="background-color: #fff;bbox-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);" >
        <h2>Sign Up</h2>
        <p>Let's get you started as a <strong>Designer</strong></p>
        <form action="" method="post">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label for="fname">Firt Name</label>
                    <input type="text" name="fname" placeholder="First Name" id="myInput"  pattern="[a-zA-Z'.''\s]*">
                </div>
                <div class="input">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" id="myInput"  pattern="[a-zA-Z'.''\s]*">
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email"  id="myInput" placeholder="Enter your Email"  >
                </div>

                <div class="grid-details">
                    <div class="input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="myInput" placeholder="Password"  >
                    </div>
                    <div class="input">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword" id="myInput" placeholder="Confirm Password"  >
                    </div>
                    <div class="input1">
                        <input type="checkbox" name="check"  required>
                        <label for="check">By continuing you accept <a href="">Terms</a> and <a href="">Condition</a></label>
                    </div>
            </div>
            <div class="submit">
                <input type="submit" style="background-color:  #000;border-radius: 20px;border: none;" value="SignUp Now" class="button" >
            </div>
        </form>
        <div class="link">Already Signed up? <a href="./Login.php">Login Now</a></div>
    </div>
    <script>

document.getElementById("myForm").onsubmit = function(){
    var inputField = document.getElementById("myInput");
    if(inputField.value.trim() === ""){
        inputField.setCustomValidity("Please Enter fields");
        return false;
    }else{
        inputField.setCustomValidity("");
        return true;
    }
};

const form = document.querySelector('form'),
    Button = form.querySelector('.submit input');
    errorText = document.querySelector('.error-text');

    form.onsubmit = (e)=>{
    e.preventDefault();
    }

Button.onclick = () => {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ProgramSignUpD.php', true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if(data == "success"){
                            location.href = 'verifyD.php';
                        }else{
                            errorText.textContent = data; // Display the response error in the error-text element
                            errorText.style.display = 'block';
                            setTimeout(() => {
                                errorText.style.display = 'none';
                             }, 5000);
                        }
                    }
                }
            }

            let formData = new FormData(form);
            xhr.send(formData);
        };
    </script>
</body>
</html>
