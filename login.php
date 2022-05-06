<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   } else {
      $message[] = 'incorrect password or email!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" type="image/png" href="./frontpage/frontimages/Screenshot 2022-05-06 203524.png"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ZhDevShop - login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      input {
         text-align: center;
      }

      body {
         background-image: url(./images/camille-couvez-H5PnIYI_1I0-unsplash.jpg);
         overflow: hidden;
      }

      .main {
         background-color: rgb(210, 220, 230, 0.3);
      }

      .imgft {
         height: 200px;
         width: 200px;
      }

      .form-container form {
         width: 40%;
         box-shadow: 1px 1px 10px silver;
         margin-top: 45px;
         padding: 10px;
         border: none;
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
   </st>
</head>

<body><?php
      if (isset($message)) {
         foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
         }
      }
      ?>
   <h3 style="padding: 16px 16px;"><a style="color: white;text-decoration: none;" href="./frontpage/index.php">
         <- Back Home</a>
   </h3>
   <div class="form-container">
      <form action="" method="post">
         <h3>Log In</h3><input type="email" name="email" required placeholder="Email" class="box"><input type="password" name="password" required placeholder="Password" class="box"><input type="submit" name="submit" class="btn" value="Log In">
         <p>Do You have already an account ? <a href="register.php">New Account</a></p>
         <p>Log in as an Admin <a href="./adminlog.php">Here</a></p>
      </form>
   </div>
</body>

</html>