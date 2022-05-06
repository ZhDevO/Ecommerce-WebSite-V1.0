<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./frontimages/Screenshot 2022-05-06 203524.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZhDevShop</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        footer {
            height: 60px;
        }
        footer .text-center {
            text-align: center;
            background: white;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 5vh;
            background-color: transparent;
            color: #fff;
            font-size: 20px;
            padding-top: 25px;
            letter-spacing: 0.15rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar">
                <a href="./index.php" class="nav-branding">ZhDevShop</a>
                <ul class="nav-menu" style="padding: 32px 0;">
                    <li style="padding: 8px 16px;" class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                    <li style="padding: 8px 16px;" class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li style="padding: 8px 16px;" class="nav-item"><a href="./contacts.php" class="nav-link">Contacts</a></li>
                    <li style="padding: 8px 16px;" class="nav-item"><a href="../admin/products1.php" class="nav-link">Products</a></li>
                    <li class="nav-item"><button style="border-radius: 15px;padding: 8px 16px;"><a href="../register.php" class="nav-link">Register</a></button></li>
                    <li class="nav-item"><button style="border-radius: 15px;padding: 8px 16px;"><a href="../login.php" class="nav-link">Sign Up</a></button></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
    </div>
    <div class="first-section">
        <div class="header-area">
            <h1 style="color: white;margin-bottom: 20px;font-family: sans-serif;font-size: 50px;">Welcome To <span style="color: black;">ZhDevShop</span></h1>
            <p style="color: #fff;margin-left: 40px;font-size: 20px;">Here you can buy <span class="animate"></span></p>
            <button class="shop-now"><a href="../admin/products1.php">Shop NOW</a></button>
        </div>
        <div class="slider">
            <div class="slides">
                <!-- start radio buttons -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- End radio buttons -->
                <!-- slide images start -->
                <div class="slide first">
                    <img src="./frontimages/1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./frontimages/2.png" alt="">
                </div>
                <div class="slide">
                    <img src="./frontimages/3.png" alt="">
                </div>
                <div class="slide">
                    <img src="./frontimages/5.png" alt="">
                </div>
                <!-- slide images end -->
                <!-- automatic navigation start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- automatic navigation end -->
            </div>
            <!-- manual navigation start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- manual navigation end -->
        </div>
    </div>


    <footer>
        <p class="text-center">Copyright &copy;2022 ZhDevShop</p>
    </footer>
    <script src="script.js"></script>
    <script src="./typed.js"></script>
    <script>
        var typed = new Typed('.animate', {
            strings: [
                "<span style='color: yellow;'><b>Latest Iphones - Mac</b></span>",
                "<span style='color: orange;'><b>Cleaning Tools</b></span>",
                "<span style='color: lightblue;'><b>Health and Beauty Products</b></span>",
                "<span style='color: red;'><b>Accessories</b></span>",
                "<span style='color: lightgreen;'><b>And More ...</b></span>",
            ],
            typeSpeed: 20,
            backSpeed: 100,
            backDelay: 700,
            loop: true
        });
    </script>
</body>

</html>