<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
        header("location:../Signup&Login/index.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Homepage.css?version=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Homepage</title>
</head>
<body>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" data-aos="zoom-in-left" data-aos-delay="150" class="logo"><img src="../References/8423366766_a3fb09a6-277d-4646-9eec-9977ffaba9eb.png" alt="logo"></a>

        <nav class="navbar">
            <a href="#" data-aos="zoom-in-left" data-aos-delay="300">Home</a>
            <a href="#about" data-aos="zoom-in-left" data-aos-delay="450">About Us</a>
            <a href="#services" data-aos="zoom-in-left" data-aos-delay="600">Services</a>
            <a href="#destination" data-aos="zoom-in-left" data-aos-delay="750">Destination</a>
            <a href="#gallery" data-aos="zoom-in-left" data-aos-delay="900">Gallery</a>
            <a href="#feedback" data-aos="zoom-in-left" data-aos-delay="1050">Feedback</a>
            <a href="logout.php" data-aos="zoom-in-left" data-aos-delay="1200">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </nav>

        <div class="shopping" data-aos="zoom-in-left" data-aos-delay="1350">
            <a href="#destination"><i class="fas fa-shopping-cart"></i>
            <span class="quantity">0</span></a>
        </div>
        <!-- <a href="#book-form" class="btn" data-aos="zoom-in-left" data-aos-delay="1200">Book Now</a> -->

    </header>

    <section class="home" id="home">
    
        <video src="../References/pexels-fl-studio-imageline-3094026-1920x1080-30fps.mp4" muted loop autoplay></video>
        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Discover</span>
            <h3 data-aos="fade-up" data-aos-delay="300">the world</h3>
            <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ab nulla quasi aliquam, cum atque a voluptatum culpa</p>
            <a href="#destination" class="btn" data-aos="fade-up" data-aos-delay="600">Book Now</a>
        </div>
    </section>

    <section class="book-form" id="book-form" data-aos="fade-up" data-aos-delay="100">
        <form action="#destination">
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="150">
                <span>you are planning?</span>
                <input type="text" placeholder="destination">
            </div>
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="300">
                <span>when looking for?</span>
                <input type="date">
            </div>
            <div class="inputBox" data-aos="zoom-in" data-aos-delay="450">
                <span>Total members?</span>
                <input type="text" placeholder="no of travellers">
            </div>

            <input type="submit" value="find now" data-aos="zoom-in" data-aos-delay="600" class="btn">

            </form>
    </section>

    <section class="about" id="about">
        <div class="video-container" data-aos="fade-left" data-aos-delay="300">
            <video src="../References/pexels-peter-fowler-2825068-1280x720-24fps.mp4" muted autoplay loop></video>
        </div>
        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <span>Who we are?</span>
            <h3>Where service meets a friendly face</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores provident tenetur incidunt dolorum eveniet sapiente inventore doloribus veniam neque facilis!</p>
            <a href="#" class="btn">read more</a>
        </div>
    </section>

    <section class="services" id="services">
        <div class="heading">
            <span>our services</span>
            <h1>Wallet-friendly</h1>
        </div>

        <div class="box-container">
            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-globe"></i>
                <h3>worldwide</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fas fa-hiking"></i>
                <h3>adventure</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fas fa-utensils"></i>
                <h3>food & drinks</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <i class="fas fa-wallet"></i>
                <h3>affordable prices</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse!</p>
            </div>
        </div>
    </section>

    <section class="destination" id="destination">
        <div class="heading">
            <span>our destination</span>
            <h1>Unleash Your Travel Spirit</h1>
        </div>
        
        <div class="box-container"></div>
        
        <div class="card">
            <div class="wrap">
                <h1>Cart</h1>
                <span>clear</span>
            </div>
            <ul class="listCard"></ul>
            <div class="checkOut">
                <button type="submit" class="total">$0</button>
                <div class="closeShopping">Close</div>
            </div>
        </div>
    </section>
    
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>our Gallery</span>
            <h1>Memories Woven for Eternity</h1>
        </div>  
        
        <div class="box-container">
            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <img src="../References/images/pexels-rodrigo-pederzini-10311898.jpg" alt="img">
                <span>15 jan 2019</span>
                <h3>Rodrigo Pederzini</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <img src="../References/images/blog-3.jpg" alt="img">
                <span>21 jan 2023</span>
                <h3>Kristin Giles</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <img src="../References/images/pexels-trần-long-7743493.jpg" alt="img">
                <span>14 august 2022</span>
                <h3>Trần Long</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <img src="../References/images/pexels-nicolette-attree-3569890.jpg" alt="img">
                <span>31 Nov 2022</span>
                <h3>Nicolette Attree</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <img src="../References/images/pexels-alena-beliaeva-9301708.jpg" alt="img">
                <span>11 Dec 2020</span>
                <h3>Alena Beliaeva</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <img src="../References/images/pexels-arina-krasnikova-6012657.jpg" alt="img">
                <span>05 jan 2018</span>
                <h3>Arina Krasnikova</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="1050">
                <img src="../References/images/pexels-pnw-production-7624986.jpg" alt="img">
                <span>23 March 2021</span>
                <h3>Lilliana Collier</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="1200">
                <img src="../References/images/blog-1.jpg" alt="img">
                <span>27 Feb 2023</span>
                <h3>Edward Sandoval</h3>
            </div>
            <div class="box" data-aos="zoom-in-up" data-aos-delay="1350">
                <img src="../References/images/pexels-alex-azabache-3879070.jpg" alt="img">
                <span>12 June 2018</span>
                <h3>Alex Azabache</h3>
            </div>
        </div>
    </section>

    <section class="feedback" id="feedback">

        <div class="box-container" data-aos="fade-right" data-aos-delay="300">
            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio.</p>
                <div class="user">
                    <img src="../References/tom4.jpg" alt="client">
                    <div class="info">
                        <h3>Tom Cruise</h3>
                        <span>Actor</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio.</p>
                <div class="user">
                    <img src="../References/nolan.jpg" alt="client">
                    <div class="info">
                        <h3>Christopher Nolan</h3>
                        <span>Director</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio.</p>
                <div class="user">
                    <img src="../References/chris.jpg" alt="client">
                    <div class="info">
                        <h3>Chris evans</h3>
                        <span>Actor</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio.</p>
                <div class="user">
                    <img src="../References/cillian.jpg" alt="client">
                    <div class="info">
                        <h3>cillian murphy</h3>
                        <span>actor</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <span>testimonials</span>
            <h3>A symphony of praise from our cherished clientele</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit mollitia odio deserunt saepe commodi. Natus suscipit totam nisi sit impedit cumque dignissimos possimus perferendis perspiciatis?</p>
        </div>
    </section>

    <div class="banner">
        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>Venture into the unknown</span>
            <h3>Join us on a journey beyond horizons</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur sit corporis sed exercitationem eveniet recusandae.</p>
            <a href="#book-form" class="btn">Book Now</a>
        </div>
    </div>

    <section class="footer">
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo"><img src="../References/8423366766_a3fb09a6-277d-4646-9eec-9977ffaba9eb.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="share">
                    <a href="#"class="fab fa-facebook-f"></a>
                    <a href="#"class="fab fa-twitter"></a>
                    <a href="#"class="fab fa-instagram"></a>
                    <a href="#"class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="300">
               <h3>quick links</h3>
               <a href="#home" class="links"><i class="fas fa-arrow-right"></i>home</a> 
               <a href="#about" class="links"><i class="fas fa-arrow-right"></i>about us</a> 
               <a href="#services" class="links"><i class="fas fa-arrow-right"></i>Services</a> 
               <a href="#destination" class="links"><i class="fas fa-arrow-right"></i>destination</a> 
               <a href="#gallery" class="links"><i class="fas fa-arrow-right"></i>Gallery</a> 
               <a href="#feedback" class="links"><i class="fas fa-arrow-right"></i>Feedback</a> 
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p><i class="fas fa-map"></i>Lahore, Pakistan</p>
                <p><i class="fas fa-phone"></i>+ 92 326 774 754-4</p>
                <p><i class="fas fa-envelope"></i>wajeehhaider125@gmail.com</p>
                <p><i class="fas fa-clock"></i>8:00a.m - 10:00pm</p>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <h3>newsletter</h3>
                <p>subscribe for latest update</p>
                <form action="">
                    <input type="email" name="newsmail" placeholder="Email" class="email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>
        </div>
    </section>

    <div class="credit">coded by <span>Wajeeh Haider</span> | all rights reserved</div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="Homepage.js?version=1.0"></script>
    
    <script>

        AOS.init({
            duration:800,
            offset:100,
        })

        if (window.matchMedia('(max-width: 450px)').matches) {
            AOS.init({
                duration: 800,
                offset: 10,
            });
        }
    </script>


</body>
</html>