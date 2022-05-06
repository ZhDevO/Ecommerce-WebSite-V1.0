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
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-image: url(../images/camille-couvez-H5PnIYI_1I0-unsplash.jpg);
        }
        .main {
            margin-top: 90px;
            background-color: rgb(210,220,230,0.3);
        }
        .inpt {
            transform: scale(1.1);
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
            elt.className = 'inpt'
        }
        function deselection(elt) {
            elt.className = ''
        }
    </script>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from products where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2 style="color: white;">Update The Product</h2>
                <input onfocus="selection(this)" onblur="deselection(this)" type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input onfocus="selection(this)" onblur="deselection(this)" type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input onfocus="selection(this)" onblur="deselection(this)" type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Update The Product's Picture</label>
                <button name='update' type='submit'>Update The Product</button>
                <br><br>
                <a href="products.php">Display All Products</a>
            </form>
        </div>
        <p>Developed By OmarZR | Chebani Mohammed</p>
    </center>
</body>
</html>