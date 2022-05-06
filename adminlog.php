<?php

include 'config.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" type="image/png" href="./frontpage/frontimages/Screenshot 2022-05-06 203524.png"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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
      ?><div class="form-container">
      <form action="" method="post">
         <h3>Log In as admin</h3><input type="email" name="email" required placeholder="Email" class="box"><input type="password" name="password" required placeholder="Password" class="box"><input type="submit" name="action" class="btn" value="Log In">
      </form>
      <?php
      include_once('./adminauth.php');
      if (!empty($_POST['action'])) {
      
          $email = $_POST['email'];
          $pass = $_POST['password'];
       
          $r = auth::adminauth($email, $pass );
          if($r ==0) {
              echo "<script>alert('incorrect password or email!')</script>";
          }else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            header('location:admin/index.php');
          }
       }
      ?>
   </div>
</body>

</html>