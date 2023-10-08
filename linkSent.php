 <?php
// session_start();
//     include "config.php";
//     $unique_id = $_SESSION['unique_id'];
//     if (empty($unique_id)) {
//         header("Location: Login.php");
//     }
//     $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
//     if (mysqli_num_rows($qry) > 0) {
//         $row = mysqli_fetch_assoc($qry);
//         if ($row) {
//             $_SESSION['verification_status'] = $row['verification_status'];
//             if ($row['verification_status'] == 'verified') {
//                 header("Location: linkSent.php");
//             }
//         }
//     }
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
    <link rel="stylesheet" href="./css/verify.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .button{
            height: 45px;
    border: none;
    color: #f2f3f7;
    width: 100%;
    background: #006692;
    font-size: 17px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 13px;
    border: 2px solid #2943aa;
    margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form" style="text-align: center;max-width: 500px;">
        <h2>Verify Your Account</h2>
        <p style='background-color: rgb(194, 228, 193);color: green;"'>We sent you a Password reset link please check your email</p>
            <div class="submit">
                <a href="https://www.gmail.com"><input type="submit" style="background-color:  #088178;border: none;" value="Open Gmail" class="button"></a>
            </div>
        </form>
    </div>

    <!-- <script>
     const form = document.querySelector('form'),
            Button = form.querySelector('.submit input');
        errorText = document.querySelector('.error-text');

    Button.onclick = () => {
                let xhr = new XMLHttpRequest();
                xhr.open('GET', 'linkSent.php', true);
                xhr.onload = () => {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = xhr.response;
                            if(data == "success"){
                                location.href = 'linkSent.php';
                            }else{
                                errorText.textContent = data; // Display the response error in the error-text element
                                errorText.style.display = 'block';
                            }
                        }
                    }
                }

                let formData = new FormData(form);
                xhr.send(formData);
            };
        </script>        -->
    </body>
</html>