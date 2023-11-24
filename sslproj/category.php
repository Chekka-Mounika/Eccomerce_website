<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="try.css">
    <style>
.catclass{
  display:flex;
  border:2px solid rgb(77, 70, 70);
  border-radius:20px;
  justify-content:center;
  align-items:center;
  flex-wrap:wrap;
  /* border: 2px solid white; */
  width:90%;
  margin:auto;
  margin-top:75px;
  margin-bottom:50px;


}
.productbtn{
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  margin:10px;
  width:250px;
  height:270px;
  border:1px solid grey;
  border-radius:20px;
  margin-top:20px;
  margin-bottom:20px;
}
.productbtn:hover{
  box-shadow: 4px 4px 4px 4px rgb(79, 71, 71);
}
.viewproductbtn{
  padding:5px;
  cursor: pointer;
  background-color:  #E0115F;
  margin-top:20px;
  border-radius:10px;
  padding-right:20px;
  padding-left:20px;
}
.viewproductbtn:hover{
  box-shadow: 2px 2px 2px 2px rgb(160, 148, 148);
}
.getcatimage{
  margin-top:1px;
  width:210px;

}
.prodesc{
  border-top:5px solid rgb(77, 70, 70);
  margin-top:5px;
  padding-top:5px;
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

 <?php
 $catid=$_GET['catid'];
 $sql1="SELECT * FROM `products`  WHERE `product_cat_id`=$catid";
 $result=mysqli_query($conn,$sql1);
 echo '<div class="catclass">';
 if (mysqli_num_rows($result) > 0) {
 while($row=mysqli_fetch_assoc($result)){
   $productid=$row['product_id'];
   $productdesc=$row['product_description'];
   $productprice=$row['product_price'];
    echo '<div class="productbtn">
    <img src="images/p'.$productid.'.png" class="getcatimage" style="width:100px">
    <div style="color:white; width:200px; word-wrap: break-word;" class="prodesc">'.substr($productdesc,0,40).'.......</div>
    <button class="viewproductbtn"><a href="single.php?productid='.$productid.'" style="text-decoration:none;color:black;"><b>View product</b></a></button>
    </div>';
 }
 }
 else{
    echo '<div style="color:white;">no products found</div>';
 }

echo '</div>';
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
