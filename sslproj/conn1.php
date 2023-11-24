<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="try.css">
    <style>
.regbox1{
    margin:auto;
  margin-top:80px;
  margin-right:25%;
  /* margin-left:25%; */
  width:50%;
  color:white;
  border:1px solid white;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  border: 1px solid grey;
  border-radius:20px;
}
    </style>
</head>
<body>
<?php
    include "dbconnect.php";
  ?>
    <div class="navbar">
    
       
    <!-- <div><i class='bx bxs-basket'></i></div> -->
    <div id="basket"><b>MyBasket</b></div>
    <div class="buttons">  
   
   
</div>
<div class="sidebar" id="sidebar">
<span><a href='try.php'  style="text-decoration:none;color:black;"><img src="home.png" style="width: 23px;"  class="images"><a href="try.php" style="text-decoration:none;color:black;"><b>Home</b></a></span>
   <span><a href='cart.php'  style="text-decoration:none;color:black;"><img src="cart.png" style="width: 23px;" class="images"><b>Your cart</b></a></span>
   <span><a href='wishlist.php' style="text-decoration:none;color:black;"><img src="heart.png" style="width: 23px;" class="images"><b>Your wishlist</b></a></span>
   <span><a href='shop.php'  style="text-decoration:none;color:black;"><img src="orders.png" style="width: 23px;" class="images"><b>Your orders</b></a></span>
   <span><a href='account.php'  style="text-decoration:none;color:black;"><img src="account.png" style="width: 23px;" class="images"><b>Your Account</b></a></span>
   <span><a href='contact.php'  style="text-decoration:none;color:black;"><img src="phone.png" style="width: 23px;" class="images"><b>Contact Us</b></a></span>
   
</div>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$query="SELECT * from register where email='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0){
    echo "<div class='regbox1' style='padding-top:15px;padding-bottom:15px;'><br><br><div>Login Successful</div><br><br>";
    echo "<center><a href='try.php'><div><button style='padding:20px;border-radius:10px;padding-top:10px;padding-bottom:10px;cursor:pointer;'>Continue to shop</button></div></a></center><br><br></div>";
    session_start();
    $row=mysqli_fetch_assoc($result);
    $_SESSION['userid']=$row['id'];
    $_SESSION['loggedin']=true;
    // $_SESSION['username']=$name;
    // echo $result['username'];
    $_SESSION['useremail']=$email;
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    // echo '<div color="white">'.$_SESSION['loggedin'].'</div>';
    // echo '<div color="white">'.$_SESSION['username'].'</div>';
    // echo '<div color="white">'.$_SESSION['useremail'].'</div>';
                      }
}
else {
    echo "<div class='regbox1' style='padding-top:15px;padding-bottom:15px;'><br><br><div>Invalid credentials!!!</div><br><br>";
    echo "If you are a new user then signup<br><br>";
    echo "<center><a href='try.php'><div><button style='padding:20px;border-radius:10px;padding-top:10px;padding-bottom:10px;cursor:pointer;'>Go to Home</button></div></a></center><br><br></div>";
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