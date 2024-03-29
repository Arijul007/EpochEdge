<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) 
{
    header("location: auth.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/icon" href="images/88.gif">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EpochEdge</title>

    <!--Code for font awesome cdn-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!--Code for font awesome cdn-->

    <!--Code for linking css file-->

    <link rel="stylesheet" href="css/style.css">


    <!--Code for linking css file-->

    <link rel="stylesheet" href="https://unpkg.com/swiper@11/swiper-bundle.min.css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>




    <!--Code for header section-->

    <header class="header">
        <a href="#" class="logo"><i class="fa fa-camera" aria-hidden="true"> EpochEdge</i></a>

        <nav class="navbar">
            <a href="#home"> Home</a>
            <a href="#features"> Features</a>
            <a href="#review"> Review</a>
            <a href="#support"> support</a>


        </nav>

        <div class="icons">
            <a href="auth.php"><i class="fa fa-user" id="login-btn"></i></a>
            <a href="logout.php"><i class="fa fa-sign-out" id="logout-btn"></i></a>
        </div>


        <form action="#" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="enter your email" class="Box">
            <input type="password" placeholder="enter your password" class="Box">
            <p>Forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">

        </form>


    </header>

    <!--Code for header section-->


    <!--Code for banner section-->

    <section class="home" id="home">
        <div class="content">
            <h3>Delever Images Faster for you</h3>
            <h4> Powered by AI</h4>
            <p> Make images reach every event attendee privately and securely using facial recognition.
                Generate leads and print sales like never before.
            </p>
            <a href="#" class="btn"> GET START</a>
        </div>


    </section>


    <!--Code for banner section-->

    <!--Code for our features section-->



    <section class="features" id="features">
        <h1 class="heading"><span>features</span></h1>

        <div class="box-container1">
            <div class="box">
                <img src="images/images.jpeg">
                <h3>upload your images</h3>
                <p>its the best way to share your pictures to many people's with privacy and security</p>
                <a href="U_image/index.php" class="btn"> let's start</a>

            </div>

        </div>
        <div class="box-container2">
            <div class="box">
                <img src="images/asd.jpg">
                <h3>get your images</h3>
                <p>its the best way to collect your pictures to your friends with privacy and security</p>
                <a href="webcam/get.php" class="btn"> let's start</a>

            </div>

        </div>

    </section>


    <!--Code for our features section-->

    <!--Code for our trusted by professionals section-->

    <section class="trusted-by-professionals" id="trusted-by-professionals">
        <h1 class="heading"><span>trusted by professionals</span></h1>
        <div class="swiper trusted-by-professional-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box-2">
                    <img src="images/3.jpg">
                    <p>When it comes to accuracy and features, no other Al platform compares to heaven ARITO .</p>
                    <h1>Cory Goldberg</h1>
                    <h1>Canon Ambassador</h1>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                </div>



                <div class="swiper-slide box-2">
                    <img src="images/1.jpg">
                    <p>Cutting down delivery time and driving up visibility at the same time?! Now that's game changing!
                    </p>
                    <h1>Sam Stanton</h1>
                    <h1>Red Button Studio</h1>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>

                </div>


                <div class="swiper-slide box-2">
                    <img src="images/4.jpg">
                    <p>ARITO is just miles ahead compared to any other process automation tool out there!</p>
                    <h1>Susan Williams</h1>
                    <h1>NewKnot Studios</h1>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>

                </div>

                <div class="swiper-slide box-2">
                    <img src="images/5.jpg">
                    <p>ARITO allows me to speed up my workflow without compromising on quality. It's a life saver!</p>
                    <h1>Raja Jain</h1>
                    <h1>Fujifilm Ambassador</h1>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>

                </div>

                <div class="swiper-slide box-2">
                    <img src="images/2.jpg">
                    <p>I wanted to spend more time with my camera and not my computer... ARITO has made it happen!</p>
                    <h1>CJennie Jones</h1>
                    <h1>Pro-port photography</h1>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!--Code for our trusted by professionals section-->


    <!--Code for our what set as apart section-->

    <section class="apart" id="apart">
        <h1 class="heading"><span>what set as apart</span></h1>

        <div class="box-container-x">
            <div class="a-box">
                <img src="images/6.jpg">
                <h3 class="sp"><span>World's first</span> end to end image post production solution.</h3>
                <p>Culling, editing and sharing built into a singular platform.The only workflow you'll ever need.</p>


            </div>

        </div>
        <div class="box-container-y">
            <div class="a-box">
                <img src="images/7.jpg">
                <h3 class="sp">Made by <span>photographers </span>, for photographers.</h3>
                <p class="sp">Founded by <span>Anand Rath</span> Made with industry leaders in the field of computer
                    vision and machinelearning</p>


            </div>

        </div>
        <div class="box-container-z">
            <div class="a-box">
                <img src="images/9.jpg">
                <h3 class="sp">just <span>save time</span>, grow business</h3>
                <p>This platform allows you to monetize every single image, generate leads your customers with cutting
                    edge tech.</p>


            </div>

        </div>


    </section>


    <!--Code for our what set as apart section-->


    <!--Code for our review section-->


    <section class="review" id="review">
        <h1 class="heading-x"><span>rated 4.5/5</span></h1>
        <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
            <p>see our 5 reviews on <i class="fa fa-star"></i> trustpilot</p>

        </div>




    </section>


    <!--Code for our review section-->

    <!--Code for our support section-->

    <section class="footer">
        <div class="box-container-r">
            <div class="box-xx">
                <h3>epoch <i class="fa fa-camera"></i></h3>
                <p>Feel Free To Follow Us On Our Social Media Handlers All The Links Are Given Below.</p>

                <div class="share">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contect info</h3>
                <a href="#" class="links"><i class="fa fa-phone"></i> +91 9864765634</a>
                <a href="#" class="links"><i class="fa fa-phone"></i> +91 9763645637</a>
                <a href="#" class="links"><i class="fa fa-envelope"></i> ari07@gmail.com</a>
                <a href="#" class="links"><i class="fa fa-map-markar"></i> uluberia,india - 700150</a>

            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i> home</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i> Features</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i> review</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i> support</a>

            </div>

            <div class="box">
                <h3>news letter</h3>
                <p>follow for last update</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="follow" class="btn">
                <img src="images/44.png" class="ima">


            </div>

        </div>

        <div class="credit"> created by <span>EpochEdge group</span> | all rights reserved</div>

    </section>


    <!--Code for our support section-->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>