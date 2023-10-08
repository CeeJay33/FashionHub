<?php
    session_start();
    include "config.php";
   $unique_id = $_SESSION['unique_id'];
    if (empty($unique_id)) {
        header("Location: Login.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM userd WHERE unique_id = '{$unique_id}'");
    if (mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry);
        if ($row) {
            $_SESSION['verification_status'] = $row['verification_status'];
            if ($row['verification_status'] == 'verified') {
                header("Location: introDesinPage.php");
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Sign in || Sign up </title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="./css/verify.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="form" style="text-align: center;max-width: 500px;">
        <h2>Verify Your Account</h2>
        <p style='color: rgb(194, 228, 193);color: green;"'>We sent you a verification Code Enter the code below to confirm your email address..</p>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
            <div class="fields-input">
                <input type="number" name="otp1" class="otp_fields" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp2" class="otp_fields" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp3" class="otp_fields" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp4" class="otp_fields" placeholder="0" min="0" max="9" required onpaste="false">
            </div>
            <div class="submit">
                <input type="submit" style="background-color:  #000;border: none;" value="Verify Now" class="button">
            </div>
        </form>
    </div>
        <script>
            const otp = document.querySelectorAll('.otp_fields');

            otp[0].focus();

            otp.forEach((field, index) =>{
                field.addEventListener('keydown', (e) => {
                    if(e.key >= 0 && e.key <=9){
                        otp[index].value = '';
                        setTimeout(() => {
                            otp[index+1].focus(); 
                        }, 4);
                    }

                    else if(e.key === 'Backspace'){
                        setTimeout(() =>{
                            otp[index-1].focus();
                        }, 4);
                    }
                });
            });

        const form = document.querySelector('form'),
            Button = form.querySelector('.submit input');
        errorText = document.querySelector('.error-text');

                        Button.onclick = (e) => {
                    e.preventDefault(); 
                };


            Button.onclick = () => {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', 'ProgramVerifyD.php',true);
                xhr.onload = () => {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = xhr.response.trim();
                    if (data === "success") {
                        location.href = 'introDesinPage.php';
                    } else {
                        errorText.textContent = data;
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
            }
        </script>
    </body>
</html>