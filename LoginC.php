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
    <link rel="stylesheet" href="./css/styles.css">
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
        <h2>Sign In </h2>
        <p>Let's get you in</p>
        <form action="" autocomplete="off" id="myForm">
            <div class="error-text">Error</div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="grid-details">
                    <div class="input">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" >
                    </div>
            <div class="submit">
                <input type="submit" style="background-color:  #000;border: none;" value="SignUp Now" class="button" >
            </div>
        </form>
        <div class="Forgot">
            <a href="recovery.php" style="text-decoration: none;">Forgot Password</a>
        </div>
        <div class="link">Don't have an Account? <a href="./SignUpC.php">Register</a></div>
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

        const form = document.querySelector('form');
const errorText = document.querySelector('.error-text');

form.onsubmit = (e) => {
    e.preventDefault();
};

const Button = form.querySelector('.submit input');

Button.onclick = () => {
    const email = document.querySelector('input[name="email"]').value;
    const password = document.querySelector('input[name="password"]').value;

    // Create a FormData object to send form data
    const formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'ProgramSignInC.php', true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if (data === "success") {
                    // Redirect to the appropriate page based on the role
                  location.href = 'users.php';
                } else {
                    errorText.textContent = data; // Display the response error in the error-text element
                    errorText.style.display = 'block';
                    setTimeout(() => {
                        errorText.style.display = 'none';
                    }, 5000);
                }
            }
        }
    };

    xhr.send(formData);
};

    </script>
</body>
</html>