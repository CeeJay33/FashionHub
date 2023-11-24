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
    position: sticky;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background-image: url(img/flat-lay-stationary-arrangement-desk-with-copy-space-coffee\ \(2\).jpg); */
    background-repeat: no-repeat;
    background-size: cover;
}

.form{
    position: relative;
    background: #fff;
    width: 100%;
    max-width: 600px;
    border-radius: 12px;
    padding: 30px 30px;
    margin: auto;
}

.form h2{
    font-size: 30px;
    font-weight: 700;
}

.form p{
    font-size: 14px;
    padding-bottom: 8px;

}

.form form{
    margin: 8px 0;
}

.form form .profile-img{
    position: absolute;
    top: 0;
    right: 0;
    width: 75px;
    height: 75px;
    margin: 18px 30px;
    background: #f2f3f7;
    background-position: center;
    background-repeat: no repeat;
    background-size: cover;
    background-image: url(../others/user.png);
    border-radius: 50%;
    border: 4px solid #00b3ff;
}

.file-upload{
    position: absolute;
    top: 0;
    right: -15px;
    height: 35px;
    width: 35px;
    display: flex;
    border-radius: 50%;
    border: 2px solid #d2d3d7;
    overflow: hidden;
    background: #bad5e0;
    background-size: 100% 200%;
    transition: all 1s;
    font-size: 14px;
    cursor: pointer;
}

form input[type="file"]{
    position: relative;
    height: 40px;
    width: 40px;
    opacity: 0;
    cursor: pointer;
    padding: 20px;
}

.form i{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 14px;
    color: #333;
    z-index: 100;
    pointer-events: none;
    cursor: pointer;
}

.social{
    display: flex;
    gap: 30px;
    text-align: center;
    justify-content: center;
}
.social .Facebook{
    background-color: #006692;
    color: #fff;
    text-align: center;
    justify-content: center;
    padding: 10px;
    width: 150px;
    height: 40px;
    display: flex;
    gap: 6px;
    border-radius: 5px;
    cursor: pointer;
}

.social .Google{
    background-color: #e00b0b;
    color: #fff;
    text-align: center;
    justify-content: center;
    padding: 10px;
    width: 150px;
    height: 40px;
    display: flex;
    gap: 6px;
    border-radius: 5px;
    cursor: pointer;
}

.social .Twitter{
    background-color: #74c9df;
    color: #fff;
    text-align: center;
    justify-content: center;
    padding: 10px;
    width: 150px;
    height: 40px;
    display: flex;
    gap: 6px;
    border-radius: 5px;
    cursor: pointer;
}
.file-upload:hover{
    background: #eaeef0;
}

.form form .error-text{
    display: none;
    color: #851925;
    padding: 4px 6px;
    text-align: center;
    border-radius: 4px;
    background: #ffe3e5;
    border: 1px solid #dfa5ab;
    margin-bottom: 8px;
}


.form .grid-details .input:first-child{
    margin-right: 8px;
    width: 100%;
}

.form .grid-details .input:last-child{
    margin-left: 5px;
    width: 100%;
}

.form form .input input{
    height: 40px;
    width: 100%;
    font-size: 14px;
    padding: 0 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

input,
select {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.form form .input1 label{
    opacity: 0.8;
    font-size: 15px;
}

.form form .input #myInput:focus,
.form form .input #myInput:valid{
    border: 2px solid #dce2e6;
    transition: 0.1s ease;
    outline: none;

}

.form form .input #myInput:invalid{
    border: 1px solid red;
}


.form form input.button{
    height: 45px;
    border: none;
    color: #f2f3f7;
    width: 100%;
    background:  #16488a;
    font-size: 17px;
    border-radius: 20px;
    cursor: pointer;
    margin-top: 13px;
    margin-bottom: 10px;
}

.form .link{
    text-align: center;
    margin: 10px 0;
    font-size: 17px;
}

.form .link a{
    color: #006692;
    text-decoration: none;
}

.form .link a:hover{
    text-decoration: underline;
}

.Forgot a{
    text-decoration: none;
}


.fields-input{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px 0;
}

.otp_fields{
    border-radius: 5px;
    font-size: 60px;
    height: 100px;
    width: 100px;
    border: 3px solid #cacaca;
    margin: 1%;
    text-align: center;
    font-weight: 600;
    outline: none;
}

.otp_fields::-webkit-inner-spin-button,
.otp_fields::-webkit-outer-spin-button{
    -webkit-appearance: none;
    margin: 0;
}

.otp_fields:valid{
    border-color: #3085d8;
    box-shadow: 0 10px 10px -5px rgba(0,0,0,0.25);
}

@media only screen and (max-width: 455px){
    .otp_fields{
        font-size: 55px;
        height: 80px;
        width: 80px;
}

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
                        <label for="input1">Experience</label>
                        <input type="text" id="input1" name="Experience" required placeholder="eg.. 10 years">
                      </div>
                      <div class="input">
                        <label for="input2">Phone Number</label>
                        <input type="tel" id="input2" name="Phone" required placeholder="">
                      </div>
                      <div class="input">
                        <label for="input3">Category</label>
                        <select id="input3" name="Category" required>
                          <option value="Fashion Desiner" >Fashion Desiner</option>
                          <!-- <option value="option2">Option 2</option>
                          <option value="option3">Option 3</option> -->
                        </select>
                      </div>
                      <div class="input">
                        <label for="input4">Address</label>
                        <input type="text" id="input4" name="Address" placeholder="" required>
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
