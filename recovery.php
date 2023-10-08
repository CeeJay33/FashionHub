<?php
//    session_start();
//    include "config.php";
//    $unique_id = $_SESSION['unique_id'];
//    if (empty($unique_id)) {
//        header("Location: Login.php");
//    }
//    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
//    if (mysqli_num_rows($qry) > 0) {
//        $row = mysqli_fetch_assoc($qry);
//        if ($row) {
//            $_SESSION['verification_status'] = $row['verification_status'];
//            if ($row['verification_status'] == 'verified') {
//                header("Location: LinkSent.php");
//            }
//        }
//    }
?>

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


    <div class="form" style="max-width: 500px;" id="myForm">
        <h2>Reset Password </h2>
        <p>Recover your account</p>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your Email" required >
                </div>
            <div class="submit">
                <input type="submit" style="background-color:  #088178;border: none;" value="Proceed" class="button">
            </div>
        </form>
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
            xhr.open('POST', 'ProgramRecovery.php', true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if(data == "success"){
                            location.href = 'linkSent.php';
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