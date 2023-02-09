<?php

$db_name = "mysql:host=localhost;dbname=shopping247";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);
$conn1 = mysqli_connect('localhost', 'root', '', 'shopping247');


session_start();

$user_id = $_SESSION['user_id'];
if(!isset($_SESSION['user_id'])){
 //echo "user id not found";
}
function getUserById($user_id){
   global $conn;
   $query = $conn->prepare ("SELECT * FROM users WHERE user_id=" . $user_id);
   $result = mysqli_query($conn, $query);

   $user_id = mysqli_fetch_assoc($result);
   
   return $user_id;
}

if(isset($_POST['login_btn'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($rowCount > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:index.php');
         echo "logged successfully";

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}


if(isset($_POST['register_btn'])){

    $fname = $_POST['fname'];
    $fname = filter_var($fname, FILTER_SANITIZE_STRING);
    $lname = $_POST['lname'];
    $lname = filter_var($lname, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = md5($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
    $phone = $_POST['phone_no'];
 
   //  $image = $_FILES['image']['username'];
   //  $image = filter_var($image, FILTER_SANITIZE_STRING);
   //  $image_size = $_FILES['image']['size'];
   //  $image_tmp_name = $_FILES['image']['tmp_name'];
   //  $image_folder = 'assets/images/'.$image;
 
    $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select->execute([$email]);
 
    if($select->rowCount() > 0){
       echo 'user email already exist!';
      }
      else{
       if($pass != $cpass){
          echo 'confirm password not matched!';
         }
         else{
          $insert = $conn->prepare("INSERT INTO `users`(fname, lname, email,user_type, password,phone_no  ) VALUES(?,?,?,?,?,?)");
          $insert->execute([$fname,$lname, $email,'user',$pass,$phone ]);
 
         //  if($insert){
         //     if($image_size > 2000000){
         //        echo 'image size is too large!';
         //       }
         //       else{
         //        move_uploaded_file($image_tmp_name, $image_folder);
         //        echo 'registered successfully!';
         //        header('location:login.php');
         //       }
         //    }
 
         }
   }
 
}



if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);



   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id= ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
    }else{
  
      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, p_id, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_wishlist_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_wishlist_item->execute([$delete_id]);
   header('location:cart.php');

}

if(isset($_GET['delete_all'])){

   $delete_wishlist_item = $conn->prepare("DELETE FROM `wishlist` WHERE user_id = ?");
   $delete_wishlist_item->execute([$user_id]);
   header('location:wishlist.php');

}
