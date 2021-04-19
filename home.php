<?php


$conn=mysqli_connect("localhost","root","","bankmain");
$q="select * from customer";
$r=mysqli_query($conn,$q);
if(!mysqli_query($conn,$q)){
  echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="table.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
}

.header {
  overflow: hidden;
  background-color: grey;;
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
  background-color: crimson;
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
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  overflow:scroll;
  height:400px;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<div class="header">  
   <nav> <a href="add1.php">Add Customer</a> </nav>
    <nav ><a href="hist.php">Transfer History</a></nav>
    <nav ><a href="homepage.php" style="float:left;">HOME</a></nav>
</div>
<h4 style="text-align:center;font-size:30px;">USERS DETAILS</h4>
<div style="overflow-x:auto;">
  <table>
    <tr>
       <TH>SR NO.</TH>
      <th> NAME</th>
      
     
      <th>EMAIL</th>
      <th>BALANCE</th>
      <th>ACCOUNT NO.</th>
      <th>VIEW</th>
     
      
     
    
    <?php 
    while($ro=mysqli_fetch_assoc($r)){
      $cid=$ro['cid']; ?>
    
    
    <tr>
    <td><?php echo $ro['cid'];?></td>
    <td><?php echo $ro['name'];?></td>
    <td><?php echo $ro['email'];?></td>
    <td><?php echo $ro['balance'];?></td>
    <td><?php echo $ro['ano'];?></td>
    
    </div>
    <td>   <a href="view.php?cid=<?php echo $cid?>">  <button> open </button> </td>


     
 
<?php } ?>


