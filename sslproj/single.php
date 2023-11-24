<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="try.css">
    <title>Document</title>
    <style>
        .singleproduct{
            width:80%;
            height:300px;
            margin:auto;
            margin-top:90px;
            border:2px solid grey;
            border-radius:20px;
            display:flex;
            justify-content:center;
            align-items:center;
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
<!-- sidebar -->
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

<div class="singleproduct">
<?php
$productid=$_GET['productid'];
$sql1="SELECT * FROM `products`  WHERE `product_id`=$productid";
$result=mysqli_query($conn,$sql1);
  $row=mysqli_fetch_assoc($result);
  $productid=$row['product_id'];
  $productdesc=$row['product_description'];
  $productprice=$row['product_price'];
  
echo 
'<div style="width:40%;"><img src="images/p'.$productid.'.png" style="width:150px;"></div>

<div style="padding:30px;color:white; word-wrap:break-word;border:1px solid grey;border-radius:10px;width:40%" >'.$productdesc.'
<div>
<button style="padding:10px;margin:10px;  border-radius:10px;background-color: #c80c54;color:white;cursor:pointer;"><b>Rs.'.$productprice.'</b></button>
<button style="padding:10px;margin:10px; border-radius:10px;background-color: #c80c54;color:white;cursor:pointer;"><a href="addtowishlist.php?productid='.$productid.'" style="text-decoration:none;color:white;"><b>Add to wishlist</b></a></button>
<button style="padding:10px;margin:10px;  border-radius:10px;background-color: #c80c54;color:white;cursor:pointer;"><a href="addtocart.php?productid='.$productid.'" style="text-decoration:none;color:white;"><b>Add to cart</b></a></button>
</div>

</div>


</div>';

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