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
</head>
<body>


    <div class="form">
        <h2>Reset Password</h2>
        <p>Create a New password</p>
        <form action="">
            <div class="error-text">Error</div>
            <div class="grid-details">
                    <div class="input">
                        <label for="password">New Password</label>
                        <input type="password" name="password" placeholder="Password" required >
                    </div>
                    <div class="input">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="lname" placeholder="Confirm Password" required >
                    </div>
            </div>
            <div class="submit">
                <input type="submit" style="background-color:  #088178;border: none;" value="Proceed" class="button">
            </div>
        </form>
    </div>
    <script>
        const form = document.querySelector('.form form'),
        submitbtn = form.querySelector('.submit input'),
        errortxt = form.querySelector('.error-text');

        form.onsubmit = (e) => {
            e.preventDefault();
        }

        submitbtn.onclick = () =>{
            // Ajax

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "./php/SignUp.php" ,true);
            xhr.onload = () =>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        if(data == "success"){
                            location.href = './verify.php'

                        }
                        else{
                            errortxt.textContent = data;
                            error.style.display = 'block';
                            setTimeout(() => {
                                errorText.style.display = 'none';
                             }, 5000);
                        }
                    }
                }
            }
        }
    </script>
</body>
</html>