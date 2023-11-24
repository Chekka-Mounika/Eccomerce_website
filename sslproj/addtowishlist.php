<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="try.css">
<style>
    .notlogaw{
        color:white;
        border: 2px solid grey;
        border-radius:20px;
        margin:auto;
        width:50%;
        padding-top:20px;
        padding-bottom:20px;
        margin-top:100px;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .yeslogaw{
        color:white;
        border: 2px solid grey;
        border-radius:20px;
        margin:auto;
        width:50%;
        padding-top:20px;
        padding-bottom:20px;
        margin-top:100px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;

    }
</style>
</head>
<body>
<?php
    include "dbconnect.php";
  ?>
  <div class="navbar">
    
       
    <!-- <div><i class='bx bxs-basket'></i></div> -->
    <div id="basket"><a href="try.php" style="text-decoration:none;color:black"><b>MyBasket</b></a></div>
    <div class="buttons">  
      <?php
        session_start();
        if(!isset($_SESSION['loggedin'])){
          echo ' <a class="logsign" id="loginbtn"><b>Login</b></a>';
          echo '   <a class="logsign" id="signupbtn"><b>Signup</b></div></a>';
      }
      ?>
    <!-- <a class="logsign" id="loginbtn"><b>Login</b></a> -->
    
    <!-- <a class="logsign" id="signupbtn"><b>Signup</b></div></a> -->
    <?php
   
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        
          echo '<a href="logout.php" class="logsign" id="signupbtn" style="text-decoration:none"><b>logout</b></div></a>';
                            }
        ?>
    <div id="icon1"> <img src="leftarrow.png" id="left" class="showhide" title="Show menu-bar"><img src="rightarrow.png" id="right" class="showhide" title="Hide menu-bar"></div>
</div>

<div class="sidebar" id="sidebar">
<span><a href='try.php'  style="text-decoration:none;color:black;"><img src="home.png" style="width: 23px;"  class="images"><a href="try.php" style="text-decoration:none;color:black;"><b>Home</b></a></span>
   <span><a href='cart.php'  style="text-decoration:none;color:black;"><img src="cart.png" style="width: 23px;" class="images"><b>Your cart</b></a></span>
   <span><a href='wishlist.php' style="text-decoration:none;color:black;"><img src="heart.png" style="width: 23px;" class="images"><b>Your wishlist</b></a></span>
   <span><a href='shop.php'  style="text-decoration:none;color:black;"><img src="orders.png" style="width: 23px;" class="images"><b>Your orders</b></a></span>
   <span><a href='account.php'  style="text-decoration:none;color:black;"><img src="account.png" style="width: 23px;" class="images"><b>Your Account</b></a></span>
   <span><a href='contact.php'  style="text-decoration:none;color:black;"><img src="phone.png" style="width: 23px;" class="images"><b>Contact Us</b></a></span>

</div>
<div class="signup" id="sign">
  <div>
<img src="close.png" class="btn" id="btn1">
<center><h3>Don't have an account? Then signup</h3></center>
</div>
    <form action="conn.php" method="POST" class="form0">
        <label><b>Name:</b></label><br>
      <input type="text" id="name" name="name" style="width: 95%" required/>
      <!-- <button class="btn" id="btn1">x</button> -->
    <br>
      <label><b>Email:</b></label><br>
      <input type="email" id="email" name="email" style="width: 95%" required/>
      <br>
      <label><b>Password:</b></label><br>
      <input type="password" id="password" name="password" style="width: 95%" required/>
    <br>
      <label><b>Confirm Password:</b></label><br>
      <input type="password" id="cpassword" name="cpassword" style="width: 95%" required/>
      <br><br>
      <input type="submit" id="submit0" name="submit">
      
</form>
</div>
<!-- login modal -->
<div class="login" id="log">
  <div>
<img src="close.png" class="btn" id="bttn1">
<center><h3>Already have an account! Then login</h3></center>
</div>
<br><br>

    <form action="conn1.php" method="POST" class="form0" >
      <label><b>Email:</b></label><br>
      <input type="email" id="email" name="email" style="width: 95%" required/>
      <!-- <button class="bttn" id="bttn1">x</button> -->
      <br>
      <label><b>Password:</b></label><br>
      <input type="password" id="password" name="password"style="width: 95%" required/>
      <br><br>
      <input type="submit" id="submit1" name="submit1">
</form>

</div>
<?php
session_start();
$productid=$_GET['productid'];
$sql1="SELECT * FROM `products`  WHERE `product_id`=$productid";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
$productid=$row['product_id'];
  $productname=$row['product_name'];
  $productprice=$row['product_price'];


  
  if(!isset($_SESSION['loggedin'])){
    echo "<div class='notlogaw'><div><b>You are not logged in<div>Login to add products to wishlist</b></div></div></div>";
 }
  

  
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$userid=$_SESSION["userid"];
    $sql3="SELECT * FROM `wishlist`  WHERE `product_id`=$productid AND `user_id`='$userid'";
    $result2=mysqli_query($conn,$sql3);
    // $row2=mysqli_fetch_assoc($result2);

    if(mysqli_num_rows($result2)>0){
        echo"<div class='yeslogaw'><div>Product already there in wishlist</div>";
        echo"<div style='margin-top:20px;'><a href='wishlist.php'><button style='margin-right:20px;padding:10px;border-radius:10px;  background-color:  #c80c54;color:white; cursor:pointer;'><b>View wishlist</b></button></a>";
        echo '<a href="single.php?productid='.$productid.'"><button style="margin-right:20px;padding:10px;border-radius:10px; background-color:  #c80c54;color:white;cursor:pointer"><b>Continue shopping</b></button></a></div></div>';
      }
    else{

    
    $productid=$row['product_id'];
    $productname=$row['product_name'];
    $productprice=$row['product_price'];
  
    $sql2="INSERT into `wishlist`(`product_id`, `user_id`,`product_name`,`product_price`) VALUES ('$productid','$userid','$productname','$productprice')";
    $result=mysqli_query($conn,$sql2);
    echo "<div class='yeslogaw'><div>Product Added Succesfully</div>";
    echo"<div style='margin-top:20px;'><a href='wishlist.php'><button style='margin-right:20px;padding:10px;border-radius:10px;  background-color:  #c80c54;color:white; cursor:pointer;'><b>View wishlist</b></button></a>";
    echo '<a href="single.php?productid='.$productid.'"><button style="margin-right:20px;padding:10px;border-radius:10px; background-color:  #c80c54;color:white;cursor:pointer"><b>Continue shopping</b></button></a></div></div>';
    }
    

 }
   
                

?>

</body>

<script>
right.addEventListener('click',function hide(){
document.getElementById('sidebar').style.display="none";
})
left.addEventListener('click',function show(){
document.getElementById('sidebar').style.display="block";
})


signupbtn.addEventListener('click',function signup(){
        document.getElementById('sign').style.display="block";
        document.getElementById('log').style.display="none";
       })

       window.addEventListener('click',function signup1(e){
        if(e.target==document.getElementById('sign')){
        document.getElementById('sign').style.display="none";
        }
       })
       btn1.addEventListener('click',function signup2(){
        document.getElementById('sign').style.display="none";
       })
       loginbtn.addEventListener('click',function logger(){
        document.getElementById('log').style.display="block";
        document.getElementById('sign').style.display="none";
       })
       bttn1.addEventListener('click',function logger1(){
        document.getElementById('log').style.display="none";
       })
       

</script>
</html>