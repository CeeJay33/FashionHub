<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form id="otpForm" method="post">
        <input type="tel" id="phone" name="phone" required>
        <button id="btn" type="submit">Click for OTP</button>
    </form>
</div>

<script>
    const form = document.getElementById('otpForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default form submission behavior
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'PRO.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response.trim();
                    if (data === "success") {
                        console.log("OTP sent successfully");
                    } else {
                        console.error("Error: " + data);
                    }
                } else {
                    // Handle other HTTP status codes if needed
                    console.error("HTTP Error: " + xhr.status);
                }
            }
        };

        let formData = new FormData(form);
        xhr.send(formData);
    });
</script>
</body>
</html>
