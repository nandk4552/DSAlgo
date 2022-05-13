<?php
require_once '_config.php';
// session_start();
// $user_id = $_SESSION['user_id'];
// if (!isset($user_id)) {
//    header('location:login.php');
// };
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
   if (empty($_POST["name"])) {
      $message[] = "Name is required";
   } else {
      $name = test_input(mysqli_real_escape_string($conn, $_POST['name']));

      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
         $message[] = "Only letters and white space allowed";
      }
   }

   if (empty($_POST["email"])) {
      $message[] = "Email is required";
   } else {
      $email = test_input(mysqli_real_escape_string($conn, $_POST['email']));

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $message[] = "Invalid email format";
      }
   }
   if (empty($_POST["number"])) {
      $message[] = "phone number is required";
   } else {
      $number = $_POST['number'];
   }

   if (empty($_POST["message"])) {
      $message[] = "message is required";
   }else {
      $msg = test_input(mysqli_real_escape_string($conn, $_POST['message']));

   }


   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message already sent';
   } else {
      mysqli_query($conn, "INSERT INTO `message`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg');") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact | DSAlgo</title>

   <!-- aos cdn link -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


   <!-- swiper cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <div id="preloader"></div>

   <?php include '_header.php'; ?>

   <div class="heading" style="background: url(images/header/h-1.jpeg) no-repeat;">
      <h1>contact us</h1>
   </div>

   <!-- contact section starts -->
   <section data-aos="fade-up" data-aos-duration="3000" class="contact">

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <h3>any suggestions!</h3>
         <input type="text" name="name" placeholder="enter your name" class="box" required>
         <input type="email" name="email" placeholder="enter your email" class="box" required>
         <input type="number" name="number" placeholder="enter your number" class="box" required>
         <textarea name="message" class="box" placeholder="enter your message" cols="30" rows="10" required></textarea>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </section>
   <!-- contact section ends -->

   <?php include '_footer.php'; ?>