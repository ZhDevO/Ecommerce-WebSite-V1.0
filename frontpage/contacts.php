<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="./frontimages/Screenshot 2022-05-06 203524.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZhDevShop - Contacts</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            position: relative;
        }

        .contact-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin: auto;
        }

        .contact-info {
            color: #ffff;
            padding: 15px 0;
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
            letter-spacing: 0.15rem;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to top, #f76300, #c300ff);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to top, #c300ff, #f76300);
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar">
                <a href="index.php" class="nav-branding">ZhDevShop</a>
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
    <div class="contact-section">
        <div class="contact-info">
            <h1>Our Contact : </h1>
            <h4>Adress : </h4>
            <p><a href="https://www.google.com/maps/place/Mosqu%C3%A9e+Fahd/@35.7660756,-5.8245062,151m/data=!3m2!1e3!4b1!4m5!3m4!1s0xd0b875063beb4d1:0x55368e9f76bb26e0!8m2!3d35.766012!4d-5.8239963?hl=fr" target="_blank">Tangier, Nouveau Quartier, Charf-souani, Charf-souani</a></p>
            <h4>Phone : </h4>
            <p><a href="tel:0677833006">(+212)-677833006</a></p>
        </div>
        <div class="mapuh">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d658.6463596463152!2d-5.82450617083235!3d35.76607558694693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b875063beb4d1%3A0x55368e9f76bb26e0!2sMosqu%C3%A9e%20Fahd!5e1!3m2!1sfr!2sma!4v1651841891981!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <footer>
        <p class="text-center">Copyright &copy;2022 ZhDevShop</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>