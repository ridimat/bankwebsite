<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="add.css">
<link rel="stylesheet" type="text/css" href="add1.css">
<body>
  <nav>
    <div class="logo">
      <p>Sparks Bank</p>
    </div>
    <ul>
      <li><a href="hist.php" class="active">Transfer History</a></li>
      <li><a href="add.php">Add Customer</a></li>
      <li><a href="">Services</a></li>
      <li><a href="home.php">Home</a></li>
    </ul>
  </nav>
  <div class="wrapper">
    <div class="title">Register Here</div>
    <form method="post" action="#">
      <div class="field">
        <input type="text" name="name" required>
        <label>Name</label>
      </div>
      <div class="field">
        <input type="text" name="bal" required>
        <label>Balance</label>
      </div>
      <div class="field">
        <input type="text" name="email" required>
        <label>Email Address</label>
      </div>
      <div class="field">
        <input type="tel" name="ano" required>
        <label>Account Number</label>
      </div>
      
        <div class="field">
          <input type="submit" name="insert" value="Submit">
        </div>
        
      </form>
    </div>

  
<?php
$conn=mysqli_connect("localhost","root","","bankmain");
if(!$conn){
    echo "error".mysqli_connect_error();
}
else{
if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $bal=$_POST['bal'];
    $email=$_POST['email'];
    $ano=$_POST['ano'];
   
    $q="insert into customer(name,  email,balance, ano) VALUES ('$name', '$email', '$bal','$ano')";
    $query_run=mysqli_query($conn,$q);

    }
    
}
    
   
    

  

    ?>


</form>
</div>
</body>
</head>
</html>
