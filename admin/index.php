<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="../frontpage/frontimages/Screenshot 2022-05-06 203524.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-image: url(../images/camille-couvez-H5PnIYI_1I0-unsplash.jpg);
            overflow: hidden;
        }
        .main {
            background-color: rgb(210,220,230,0.3);
        }
        .imgft {
            height: 200px;
            width: 200px;
            background-position: center;
            background-size: cover;
        }
        .c {
            background: #9999;
        }
        .inpt {
            transform: scale(1.1);
        }
        h2 {
            color: #fff;
        }
        p {
            color: #fff;
        }
        a {
            color: white;
        }
        .borderbtn {
            background-image: linear-gradient(to left, violet, orange, red);
            width: 400px;
            border-radius: 15px;
        }
    </style>
    <script>
        function selection(elt) {
            elt.className = 'c'
            elt.className = 'inpt'
        }
        function deselection(elt) {
            elt.className = ''
        }
    </script>
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Admin Page : Add Products</h2>
                <img class="imgft" src="../images/undraw_To_the_moon_re_q21i.png" alt="logo" width="350px">
                <input onfocus="selection(this)" onblur="deselection(this)" type="text" name='name' placeholder="Product's Name">
                <br>
                <input onfocus="selection(this)" onblur="deselection(this)" type="text" name='price' placeholder="Product's Price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Upload The Product Image</label>
                <button name='upload'>Upload The Product✅</button>
                <br><br>
                <div class="borderbtn">
                    <a href="products.php">Show All Products</a>
                </div>
            </form>
        </div>
        <p>Developed By OmarZR | Chebani Mohammed</p>
    </center>
</body>

</html>