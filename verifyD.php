<?php
    session_start();
    include "config.php";
   $unique_id = $_SESSION['uniqued'];
    if (empty($unique_id)) {
        header("Location: LoginD.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM userd WHERE uniqued = '{$unique_id}'");
    if (mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry);
        if ($row) {
            $_SESSION['verification_status'] = $row['verification_status'];
            if ($row['verification_status'] == 'verified') {
                header("Location: dashboardp.php");
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
    <style>
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

                //         Button.onclick = (e) => {
                //     e.preventDefault(); 
                // };


            Button.onclick = () => {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', 'ProgramVerifyD.php',true);
                xhr.onload = () => {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = xhr.response.trim();
                    if (data === "success") {
                        location.href = 'dashboardp.php';
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