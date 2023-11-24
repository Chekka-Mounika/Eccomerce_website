<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="try.css">
    <title>Document</title>
    <style>
.regbox{
  margin:auto;
  margin-top:80px;
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
.regbox1{
  margin:auto;
  margin-top:80px;
  margin-right:25%;
  width:90%;
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



<?php
// Check connection
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$sql0="SELECT * FROM `register` where email='".$email."'";
$result0=mysqli_query($conn,$sql0);
$fetch0=mysqli_num_rows($result0);
if($fetch0>0)
{
    echo "<div class='regbox1' style='padding-top:15px;padding-bottom:15px;'><div>EMail ALready Exists</div>";
    echo "<a href='try.php'><div><button style='padding:20px;border-radius:10px;padding-top:5px;padding-bottom:5px;cursor:pointer;margin-top:20px;'>Go Back</button></a></div></div>";
}
else{
if($password===$cpassword){
$sql="INSERT INTO register (`username`,`email`,`password`) VALUES ('$name','$email','$password')";
$sql=mysqli_query($conn,$sql);
if($sql){
echo "<div class='regbox'><br><br><div>REGISTRATION SUCCESFULL</div><br><br>";
echo "<div><a href='try.php'><button type='button' style='padding:20px;border-radius:10px;padding-top:10px;padding-bottom:10px;cursor:pointer;'><b>Go to homepage</b></button></a></div><br><br></div>";


}
}
else
{
echo "<div class='regbox1'><br><br><center><div>Password didnt match with confirm password!!!</div><br><br></center>";
echo"<center><div><a href='try.php'><button style='padding:20px;border-radius:10px;padding-top:10px;padding-bottom:10px;cursor:pointer;'>Return to home</button></a></div></center><br><br></div>";
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