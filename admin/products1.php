<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="../frontpage/frontimages/Screenshot 2022-05-06 203524.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZhDevShop - Products</title>
    <style>
        body {
            background-image: url(../images/camille-couvez-H5PnIYI_1I0-unsplash.jpg);
        }

        h3 {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            color: #000;
        }

        .card {
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .card img {
            width: 100%;
            height: 200px;
        }

        main {
            width: 60%;
        }

        .adminborder {
            border: 1px solid white;
            width: 400px;
            margin-top: 30px;
            padding: 10px 0;
            background-image: url(./images/gradienta-J6LMHbdW1k8-unsplash.jpg);
            background-position: center;
            background-size: cover;
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
    <h3 style="padding: 16px 16px;"><a style="color: white;text-decoration: none;" href="../frontpage/index.php">
            <- Back Home</a>
    </h3>
    <center>
        <div class="adminborder">
            <h3 style="color: white;">Available Products : </h3>
        </div>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='../login.php' class='btn btn-success'>Add to card</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>

</html>