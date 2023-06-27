<?php include 'credentials.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&family=Raleway:wght@500&family=Tsukimi+Rounded:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Traverse</title>
</head>
<body>
    <div class="overlay"><video src="../References/pexels-tom-fisk-6702778-1920x1080-30fps.mp4" muted loop autoplay></video></div>
    
    <div class="flex-container"> <!-- Added a wrapper div for container -->
        <div class="container" data-aos="zoom-in" data-aos-delay="300">

            <?php
            if ($SAlert) {
                echo '<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                    User already exists.
                </div>';
            }
            ?>

            <?php
            if ($LAlert) {
                echo '<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                    Invalid Credentials.
                </div>';
            }
            ?>

            <input type="checkbox" id="chbx">

            <div class="signup">
                <form action="index.php" method="POST">
                    <label for="chbx" data-aos="fade-down" data-aos-delay="800">Sign Up</label>
                    <input type="text" name="name" placeholder="Username" required data-aos="fade-down" data-aos-delay="850">
                    <input type="email" name="email" placeholder="Email" required data-aos="fade-down" data-aos-delay="1000">
                    <input type="password" name="pswd" placeholder="Password" required data-aos="fade-down" data-aos-delay="1150">
                    <button type="submit" name="signup" data-aos="fade-down" data-aos-delay="1300">Sign Up</button>
                </form>
            </div>

            <div class="login">
                <form action="index.php" method="POST">
                    <label for="chbx">Login</label>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="pswd" placeholder="Password" required>
                    <button type="submit" name="login">Login</button>
                </form>
            </div>

        </div>
    </div> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        AOS.init({
            duration:800,
            offset:150,
        })

    </script>

</body>
</html>
