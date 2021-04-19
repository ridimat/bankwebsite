<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  /*background-color: hsla(89, 43%, 51%, 0.3);*/
  /*background-image: url("../Event/final1.jpg");
  background-repeat: no-repeat, repeat;*/
  background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(255,0,0,0));
  background-color: white;
 
}
.card {
  box-shadow: 0 4px 8px 0 rgba(173,216,230,1);
  max-width: 320px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
  margin-top:20px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: darkgray;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
 /* color: black;*/
}

button:hover, a:hover {
  opacity: 0.7;
}
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: grey;
  padding: 20px 10px;
}

.header a {
  float: right;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: olive green;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
   /* text-align: left;*/
  }
  
  .header-right {
    float: none;
  }
}
.btn {
  float:left;
  border: none;
  color: white;
  margin-right:500px;
  background-color:transparent;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="header"> 

<nav> <a href="add1.php">Add Customer</a> </nav>
    <nav ><a href="history.php">Transfer History</a></nav>
    <nav ><a href="home.php" style="float:left;">HOME</a></nav>
</div>
<?php
$conn=mysqli_connect("localhost","root","","bankmain");
$cid= $_GET['cid'];

$q = "SELECT * FROM customer  where cid=$cid";
$r = mysqli_query($conn,$q);
    while($row = mysqli_fetch_assoc($r)){ ?>
   
        
        <div class="add">
         
         
          
          
    </table>
          
          </div>
          </div>
          </div>
          <div class="card">
          <div class="details">
          <img src="person.png" alt="John" style="width:100%">
          <td style="font-size: 20px;"><h1><b>NAME:</b><?php echo " ".$row['name']; ?></td></tr></h1>
         <br> <tr><td style="font-size: 20px;"><b>EMAIL:</b><?php echo " ".$row['email']; ?></td></tr>
          <br><tr><td style="font-size: 20px;"><b>BALANCE:</b><?php echo " ".$row['balance']; ?></td></tr>
          <br><td style="font-size: 20px;"><b>ACCOUNT NUMBER:</b><?php echo " ".$row['ano']; ?></td></tr>
          <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
          
          <p><button><?php echo "<a style='color:white;' href='transact.php?cid=$cid'>Transact Here</a>"?></button></p>
    <?php }      ?></div></div>
